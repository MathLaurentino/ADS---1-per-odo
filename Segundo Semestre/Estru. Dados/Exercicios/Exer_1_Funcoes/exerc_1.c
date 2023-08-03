#include <stdio.h>

int soma(int num1, int num2);
int multiplicacao(int num1, int num2);
int subtracao(int num1, int num2);
int divisao(int num1, int num2);
int calculadora(int num1, int num2, char operacao);

// -------- MAIN --------

int main() {
    int num1;
    int num2;
    char operacao;

    printf("Digite um numero: ");
    scanf("%d", &num1);

    printf("Digite um segundo numero: ");
    scanf("%d", &num2);

    printf("Qual operacao voce deseja fazer: \n soma(+) \n subtracao(-) \n divisao(/) \n multiplicacao(*) \n");
    scanf(" %c", &operacao);

    int resultado = calculadora(num1, num2, operacao);

    printf("Resultado: %d\n", resultado);

    return 0;
}

// -------- Functions --------

int soma(int num1, int num2) {
    return num1 + num2;
}

int multiplicacao(int num1, int num2) {
    return num1 * num2;
}

int subtracao(int num1, int num2) {
    return num1 - num2;
}

int divisao(int num1, int num2) {
    if (num2 != 0) {
        return num1 / num2;
    }
    else {
        printf("Erro: Divisao por zero nao e permitida.\n");
        return 0;
    }
}

int calculadora(int num1, int num2, char operacao) {
    if (operacao == '+') {
        return soma(num1, num2);
    }
    else if (operacao == '*') {
        return multiplicacao(num1, num2);
    }
    else if (operacao == '-') {
        return subtracao(num1, num2);
    }
    else if (operacao == '/') {
        return divisao(num1, num2);
    }
    else {
        printf("Erro: Operacao invalida.\n");
        return 0; 
    }
}
