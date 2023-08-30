#include <stdio.h>
#include <stdlib.h>

// Estrutura para os elementos da lista
struct elemento {
    int dado;
    struct elemento *prox;
};

typedef struct elemento *Lista;

// Função para imprimir todos os elementos da lista
void imprimeLista(Lista l) {
    Lista p = l;
    printf("\nItens da lista\n");
    while (p != NULL) {
        printf("%d - ", p->dado);
        p = p->prox;
    }
    printf("\n");
}

// Função para contar o número de elementos na lista
int contaLista(Lista l) {
    Lista p = l;
    int cont = 0;
    while (p != NULL) {
        cont++;
        p = p->prox;
    }
    return cont;
}

// Função para buscar um elemento na lista e retornar o endereço
Lista buscaEndereco(Lista l, int e) {
    Lista p = l;
    while (p != NULL && p->dado != e) {
        p = p->prox;
    }
    return p;
}

// Função para inserir um elemento na lista de forma ordenada
Lista insereOrdenado(Lista l, int e) {
    Lista novo = malloc(sizeof(struct elemento));
    novo->dado = e;
    novo->prox = NULL;

    if (l == NULL || e < l->dado) {
        novo->prox = l;
        return novo;
    }

    Lista p = l;
    while (p->prox != NULL && p->prox->dado < e) {
        p = p->prox;
    }
    
    novo->prox = p->prox;
    p->prox = novo;
    return l;
}

// Função para remover um elemento da lista
Lista retiraLista(Lista l, int e) {
    Lista p = l;
    Lista ant = NULL;
    
    while (p != NULL && p->dado != e) {
        ant = p;
        p = p->prox;
    }

    if (p != NULL) {
        if (ant == NULL) {
            l = p->prox;
        } else {
            ant->prox = p->prox;
        }
        free(p);
    }

    return l;
}

int main() {
    Lista lista = NULL;
    int opcao, elemento;

    do {
        printf("\nMenu de Opções:\n");
        printf("1. Inserir elemento na lista\n");
        printf("2. Retirar elemento da lista\n");
        printf("3. Buscar elemento na lista\n");
        printf("4. Imprimir conteudo da lista\n");
        printf("5. Contar número de elementos da lista\n");
        printf("0. Sair\n");
        printf("Escolha uma opção: ");
        scanf("%d", &opcao);

        switch (opcao) {
            case 1:
                printf("Digite o elemento a ser inserido: ");
                scanf("%d", &elemento);
                lista = insereOrdenado(lista, elemento);
                break;
            case 2:
                printf("Digite o elemento a ser retirado: ");
                scanf("%d", &elemento);
                lista = retiraLista(lista, elemento);
                break;
            case 3:
                printf("Digite o elemento a ser buscado: ");
                scanf("%d", &elemento);
                Lista endereco = buscaEndereco(lista, elemento);
                if (endereco != NULL) {
                    printf("Elemento %d encontrado na lista no endereço %p.\n", elemento, (void*)endereco);
                } else {
                    printf("Elemento %d não encontrado na lista.\n", elemento);
                }
                break;
            case 4:
                imprimeLista(lista);
                break;
            case 5:
                printf("Número de elementos na lista: %d\n", contaLista(lista));
                break;
            case 0:
                printf("Encerrando o programa.\n");
                break;
            default:
                printf("Opção inválida.\n");
        }
    } while (opcao != 0);

    // Libera a memória alocada para os elementos da lista
    while (lista != NULL) {
        Lista temp = lista;
        lista = lista->prox;
        free(temp);
    }

    return 0;
}