#include <stdio.h>
#include <stdlib.h>

// Definição da estrutura do elemento da pilha
struct elemento {
    int dado;
    struct elemento *prox;
};

typedef struct elemento *Pilha;

// Função para criar uma pilha vazia
Pilha criaPilha() {
    return NULL;
}

// Função para verificar se a pilha está vazia
int pilhaVazia(Pilha p) {
    return (p == NULL);
}

// Função para empilhar um elemento na pilha
Pilha empilha(Pilha p, int e) {
    Pilha novo = malloc(sizeof(struct elemento)); // Aloca espaço para o novo elemento
    if (novo == NULL) {
        printf("Erro: nao foi possivel alocar memoria para o elemento.\n");
        exit(1);
    }
    novo->dado = e; // Atribui o valor ao novo elemento
    novo->prox = p; // O próximo do novo elemento é o topo anterior
    return novo; // O novo elemento passa a ser o topo da pilha
}

// Função para desempilhar um elemento da pilha
Pilha desempilha(Pilha p, int *e) {
    Pilha ap; // Apontador auxiliar
    if (!pilhaVazia(p)) { // Se a pilha não estiver vazia
        *e = p->dado; // Retorna o valor do elemento do topo
        ap = p; // Salva o endereço do topo para liberar memória
        p = p->prox; // Move o topo para o próximo elemento
        free(ap); // Libera a memória do elemento removido
    } else {
        *e = -1; // A pilha está vazia, retorna -1 como indicador
        printf("Pilha Vazia\n");
    }
    return p;
}

// Função para imprimir o conteúdo da pilha
void imprimePilha(Pilha p) {
    Pilha ap = p;
    printf("\nItens da pilha:\n");
    while (ap != NULL) {
        printf("%d - ", ap->dado);
        ap = ap->prox;
    }
    printf("\n");
}

int main() {
    Pilha p = criaPilha(); // Inicializa a pilha vazia
    int escolha, elemento;

    while (1) {
        printf("\nOpções:\n");
        printf("1 - Empilhar um elemento\n");
        printf("2 - Desempilhar um elemento\n");
        printf("3 - Imprimir o conteúdo da pilha\n");
        printf("4 - Sair\n");
        printf("Escolha uma opção: ");
        scanf("%d", &escolha);

        switch (escolha) {
            case 1:
                printf("Digite o elemento a ser empilhado: ");
                scanf("%d", &elemento);
                p = empilha(p, elemento);
                break;
            case 2:
                p = desempilha(p, &elemento);
                if (elemento != -1) {
                    printf("Elemento desempilhado: %d\n", elemento);
                }
                break;
            case 3:
                imprimePilha(p);
                break;
            case 4:
                printf("Encerrando o programa.\n");
                exit(0);
            default:
                printf("Opcao invalida. Tente novamente.\n");
        }
    }

    return 0;
}