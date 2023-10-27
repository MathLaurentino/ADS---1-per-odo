#include <stdio.h>
#include <stdlib.h>

// Definição da estrutura do elemento da arvore
struct Elemento {
    int dado;
    struct Elemento *esq;
    struct Elemento *dir;
};

typedef struct Elemento *Arvore;


// Função para criar uma árvore vazia
Arvore criaArvore(){
    return NULL;
}


// Função para inserir um elemento na árvore;
void insereArvore(Arvore *a, int valor)
{
    // Busca da posição de inserção
    // se a árvore é vazia
    if ((*a) == NULL){ 
        // aloca o espaço para novo registro
        (*a) = (Arvore)malloc(sizeof(struct Elemento));
        // preenche os valores
        (*a) -> dado = valor;
        (*a) -> esq = NULL;
        (*a) -> dir = NULL;
    }

    // se o elemento é menor que a raiz
    else if (valor < (*a) -> dado){ 
        // insere na subárvore da esquerda
        insereArvore(&((*a) -> esq), valor);
    }

    // se o elemento é maior que a raiz
    else if (valor > (*a) -> dado){ 
        // insere na subárvore da direita
        insereArvore(&((*a) -> dir), valor);
    }

    // se o elemento é igual à raiz
    else 
        // não deixa inserir elemento duplicado
        printf("\nValor ja existe... tente outro.\n");
}


// Função para buscar elemento na arvore
Arvore buscaArvore(Arvore a, int valor)
{
    // Árvore vazia, não encontrou elemento, retorna NULL
    if (a == NULL){ 
        return NULL;
    }

    // Se menor que a raiz, busca à esquerda
    else if (valor < a -> dado) 
        return buscaArvore(a -> esq, valor);
    
    // Se maior que a raiz, busca à direita
    else if (valor > a -> dado) 
        return buscaArvore(a -> dir, valor);
    
    // Nem menor, nem maior, encontrou o elemento. Retorna o endereço do elemento
    else 
        return a;
}


void preOrdem(Arvore a)
{
    if (a != NULL) {
        printf("\n%d", a->dado);
        preOrdem(a->esq);
        preOrdem(a->dir);
    }
}


// Imprime os elementos da árvore em ordem ascendente
void inOrdemAsc(Arvore a)
{ 
    if (a != NULL) {
        inOrdemAsc(a->esq);
        printf("\n%d", a->dado);
        inOrdemAsc(a->dir);
    }
}


// Imprime os elementos da árvore em ordem descendente
void inOrdemDesc(Arvore a)
{ 
    if (a != NULL) {
        inOrdemDesc(a->dir);
        printf("\n%d", a->dado);
        inOrdemDesc(a->esq);
    }
}


void posOrdem(Arvore a)
{
    if (a != NULL) {
        posOrdem(a->esq);
        posOrdem(a->dir);
        printf("\n%d", a->dado);
    }
}


void antecessor(Arvore a, Arvore *x)
{ // Coloca no elemento a o maior elemento da subárvore *x
    // a é o endereço do elemento a ser retirado
    // x é o endereço do ponteiro para o candidato a substituto de a
    Arvore aux;
    if ((*x)->dir != NULL) {
        // *x tem filho da direita, logo não é o maior
        antecessor(a, &((*x)->dir));
    } 
    
    else {
        // *x não tem filho da direita, logo é o subsituto
        // Move o dado subsituto para o retirado.
        a->dado = (*x)->dado;
        // Promove o filho da esquerda do susbituto ao lugar dele
        aux = *x;
        *x = aux->esq;
        // Libera o espaço usado pelo substituto (já movido para a)
        free(aux);
    }
}


// Função que retira o elemento valor da árvore apontada por a, se existir
void retiraArvore(Arvore *a, int valor)
{
    Arvore aux;
    if (*a != NULL) { // Árvore não nula

        if (valor > ((*a)->dado)) { // Retira na sub-árvore da direita
            retiraArvore(&((*a)->dir), valor);
        } 
        
        else if (valor < ((*a)->dado)) { // Retira na sub-árvore da esquerda
            retiraArvore(&((*a)->esq), valor);
        } 
        
        else { // Achou elemento, vai remover

            if ((*a)->dir == NULL) { // Elemento não tem filho da direita,
                // promove filho da esquerda
                aux = (*a);
                *a = aux->esq;
                free(aux);
            } 
            
            else if ((*a)->esq == NULL) { // Elemento não tem filho da esquerda,
                // promove filho da direita
                aux = (*a)->dir;
                free(*a);
                *a = aux;
            } 
            
            else { // Elemento tem dois filhos, promove o antecessor
                antecessor(*a, &((*a)->esq));
            }
        }
    }
}




int main() {
    Arvore arv = criaArvore();
    int opcao, valor, buscar;
    
    while(1) {
        printf("\n1 - Inserir um elemento na árvore\n");
        printf("2 - Retirar um elemento da árvore\n");
        printf("3 - Buscar um elemento na árvore\n");
        printf("4 - Imprimir todos os elementos da árvore em pré-ordem\n");
        printf("5 - Imprimir todos os elementos da árvore em ordem crescente\n");
        printf("6 - Imprimir todos os elementos da árvore em pós-ordem\n");
        printf("0 - Sair\n");
        printf("Escolha uma opção: ");
        scanf("%d", &opcao);

        switch(opcao) {
            case 0:
                return 0;
                break;
            case 1:
                printf("Digite o valor a ser inserido: ");
                scanf("%d", &valor);
                insereArvore(&arv, valor);
                break;
            case 2:
                printf("Digite o valor a ser retirado: ");
                scanf("%d", &valor);
                retiraArvore(&arv, valor);
                break;
            case 3:
                printf("Digite o valor a ser buscado: ");
                scanf("%d", &buscar);
                if(buscaArvore(arv, buscar) != NULL) {
                    printf("Elemento encontrado na árvore.\n");
                } else {
                    printf("Elemento não encontrado na árvore.\n");
                }
                break;
            case 4:
                printf("Imprimindo em pré-ordem:\n");
                preOrdem(arv);
                break;
            case 5:
                printf("Imprimindo em ordem crescente:\n");
                inOrdemAsc(arv);
                break;
            case 6:
                printf("Imprimindo em pós-ordem:\n");
                posOrdem(arv);
                break;
            default:
                printf("Opção inválida\n");
        }
    }
    return 0;
}


