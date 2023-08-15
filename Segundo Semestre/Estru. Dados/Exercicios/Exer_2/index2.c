#include <stdio.h>
#include <string.h>
#include <stdlib.h>

#define MaxItens 10
#define TamItem 20
typedef char tpLista[MaxItens][TamItem];

int inserirElemento(tpLista lista, const char *elemento, int *contador)
{
    if (*contador < MaxItens && strlen(elemento) < TamItem)
    {
        strcpy(lista[*contador], elemento);
        (*contador)++;
        system("cls");
        return 1;
    }
    else
    {
        system("cls");
        printf("Nao e possivel inserir o elemento.\n");
        return 0;
    }
}

void retirarElemento(tpLista lista, int indice, int *contador)
{
    if (indice >= 0 && indice < *contador)
    {
        for (int i = indice; i < *contador - 1; i++)
        {
            strcpy(lista[i], lista[i + 1]);
        }
        (*contador)--;
        lista[*contador][0] = '\0';
    }
    else
    {
        printf("indice invalido. Nao e possivel retirar o elemento.\n");
    }
}

int contarElementos(int contador)
{
    return contador;
}

void exibirConteudo(tpLista lista, int contador)
{
    system("cls");
    printf("Conteudo da lista:\n");
    for (int i = 0; i < contador; i++)
    {
        printf("%d: %s\n", i, lista[i]);
    }
}

int main()
{
    tpLista minhaLista;
    int opcao;
    char elemento[TamItem];
    int indice;
    int contador = 0;

    do
    {
        printf("\nEscolha uma opcao:\n");
        printf("1. Inserir elemento\n");
        printf("2. Retirar elemento\n");
        printf("3. Contar elementos da lista\n");
        printf("4. Exibir conteudo da lista\n");
        printf("5. Sair\n");
        printf("Opcao: ");
        scanf("%d", &opcao);

        switch (opcao)
        {
        case 1:
            printf("Digite o elemento a ser inserido: ");
            scanf(" %[^\n]", elemento);
            inserirElemento(minhaLista, elemento, &contador);
            break;
        case 2:
            printf("Digite o indice do elemento a ser retirado: ");
            scanf("%d", &indice);
            retirarElemento(minhaLista, indice, &contador);
            break;
        case 3:
            system("cls");
            printf("A lista possui %d elemento(s).\n", contarElementos(contador));
            break;
        case 4:
            exibirConteudo(minhaLista, contador);
            break;
        case 5:
            printf("Encerrando o programa.\n");
            break;
        default:
            system("cls");
            printf("Opcao invalida. Escolha uma opcao valida.\n");
            break;
        }
    } while (opcao != 5);

    return 0;
}
