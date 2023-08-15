#include <stdio.h>
#include <stdlib.h>
#include <string.h>

#define MaxItens 10
#define TamItem 20

typedef struct {
    char strings[MaxItens][TamItem];
    int count;
} StringList;

void criarLista(StringList *lista) {
    lista->count = 0;
}

void inserirElemento(StringList *lista, const char *elemento) {
    if (lista->count < MaxItens) {
        strcpy(lista->strings[lista->count], elemento);
        lista->count++;
        printf("Elemento inserido com sucesso.\n");
    } else {
        printf("A lista está cheia. Não é possível inserir mais elementos.\n");
    }
}

void retirarElemento(StringList *lista) {
    if (lista->count > 0) {
        lista->count--;
        printf("Elemento retirado com sucesso.\n");
    } else {
        printf("A lista está vazia. Não há elementos para retirar.\n");
    }
}

void contarElementos(const StringList *lista) {
    printf("A lista contém %d elementos.\n", lista->count);
}

void exibirConteudo(const StringList *lista) {
    printf("Conteúdo da lista:\n");
    for (int i = 0; i < lista->count; i++) {
        printf("%d: %s\n", i+1, lista->strings[i]);
    }
}

int main() {
    StringList lista;
    criarLista(&lista);

    int opcao;
    char elemento[TamItem];

    do {
        printf("\nMenu de Opções:\n");
        printf("1. Inserir Elemento\n");
        printf("2. Retirar Elemento\n");
        printf("3. Contar Elementos\n");
        printf("4. Exibir Conteudo\n");
        printf("5. Sair\n");
        printf("Escolha uma opcao: ");
        scanf("%d", &opcao);

        switch (opcao) {
            case 1:
                printf("Digite o elemento a ser inserido: ");
                scanf("%s", elemento);
                inserirElemento(&lista, elemento);
                break;
            case 2:
                retirarElemento(&lista);
                break;
            case 3:
                contarElementos(&lista);
                break;
            case 4:
                exibirConteudo(&lista);
                break;
            case 5:
                printf("Encerrando o programa.\n");
                break;
            default:
                printf("Opção invalida. Tente novamente.\n");
        }
    } while (opcao != 5);

    return 0;
}