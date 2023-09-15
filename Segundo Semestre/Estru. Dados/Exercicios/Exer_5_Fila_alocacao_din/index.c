#include <stdio.h>
#include <stdlib.h>

#define TRUE 1
#define FALSE 0

// Estrutura para representar um elemento da fila
struct elemento {
    int dado;
    struct elemento *prox;
};

typedef struct elemento Elemento;

// Estrutura para representar a fila
struct fila {
    Elemento *ini;
    Elemento *fim;
};

typedef struct fila Fila;

// Função para criar uma fila vazia
Fila criaFila() {
    Fila f;
    f.ini = NULL;
    f.fim = NULL;
    return f;
}

// Função para testar se a fila está vazia
int filaVazia(Fila f) {
    return (f.ini == NULL);
}

// Função para inserir um elemento no final da fila
Fila insereFila(Fila f, int e) {
    Elemento *novo;
    novo = malloc(sizeof(Elemento));
    if (novo == NULL) {
        printf("Erro: não foi possível alocar memória.\n");
        exit(1);
    }
    novo->dado = e;
    novo->prox = NULL;
    if (filaVazia(f)) {
        f.ini = novo;
        f.fim = novo;
    } else {
        f.fim->prox = novo;
        f.fim = novo;
    }
    return f;
}

// Função para retirar um elemento do início da fila
Fila retiraFila(Fila f, int *e) {
    Elemento *ap;
    if (!filaVazia(f)) {
        *e = f.ini->dado;
        ap = f.ini;
        f.ini = f.ini->prox;
        free(ap);
        if (filaVazia(f))
            f.fim = NULL;
    } else {
        *e = -1;
        printf("\nFila Vazia");
    }
    return f;
}

// Função para imprimir o conteúdo da fila
void imprimeFila(Fila f) {
    Elemento *ap;
    printf("\nItens da fila:\n");
    ap = f.ini;
    while (ap != NULL) {
        printf("%d - ", ap->dado);
        ap = ap->prox;
    }
    printf("\n");
}

int main() {
    Fila f = criaFila();
    int opcao, elemento;

    do {
        printf("\nEscolha uma opção:\n");
        printf("1 - Inserir elemento na fila\n");
        printf("2 - Retirar elemento da fila\n");
        printf("3 - Imprimir fila\n");
        printf("0 - Sair\n");
        scanf("%d", &opcao);

        switch (opcao) {
            case 1:
                printf("Digite o elemento a ser inserido: ");
                scanf("%d", &elemento);
                f = insereFila(f, elemento);
                break;
            case 2:
                f = retiraFila(f, &elemento);
                if (elemento != -1) {
                    printf("Elemento retirado: %d\n", elemento);
                }
                break;
            case 3:
                imprimeFila(f);
                break;
            case 0:
                printf("Saindo...\n");
                break;
            default:
                printf("Opção inválida. Tente novamente.\n");
        }
    } while (opcao != 0);

    // Libera a memória alocada
    while (!filaVazia(f)) {
        f = retiraFila(f, &elemento);
    }

    return 0;
}
