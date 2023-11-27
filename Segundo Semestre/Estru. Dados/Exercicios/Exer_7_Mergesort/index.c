#include <stdio.h>
#include <stdlib.h>

void merge(int *vet, int *aux, int esq, int meio, int dir) {
    int l1, l2, i;

    for (l1 = esq, l2 = meio + 1, i = esq; l1 <= meio && l2 <= dir; i++) {
        if (vet[l1] <= vet[l2])
            aux[i] = vet[l1++];
        else
            aux[i] = vet[l2++];
    }

    while (l1 <= meio)
        aux[i++] = vet[l1++];

    while (l2 <= dir)
        aux[i++] = vet[l2++];

    for (i = esq; i <= dir; i++)
        vet[i] = aux[i];
}

void mergeSort(int *vet, int *aux, int esq, int dir) {
    int meio;

    if (esq < dir) {
        meio = (esq + dir) / 2;
        mergeSort(vet, aux, esq, meio);
        mergeSort(vet, aux, meio + 1, dir);
        merge(vet, aux, esq, meio, dir);
    } else {
        return;
    }
}

int main() {
    int n;

    printf("Digite o tamanho do vetor: ");
    scanf("%d", &n);

    int *vetor = (int *)malloc(n * sizeof(int));
    int *aux = (int *)malloc(n * sizeof(int));

    printf("Digite os elementos do vetor:\n");
    for (int i = 0; i < n; i++) {
        scanf("%d", &vetor[i]);
    }

    mergeSort(vetor, aux, 0, n - 1);

    printf("\nVetor ordenado:\n");
    for (int i = 0; i < n; i++) {
        printf("%d ", vetor[i]);
    }

    // Libera a memória alocada
    free(vetor);
    free(aux);

    return 0;
}
