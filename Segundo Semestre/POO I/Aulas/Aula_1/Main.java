package Aula_1;

public class Main {
	public static void main(String[] args) {
		String cliente = "matheus";
		
		Pet pet1 = new Pet();
		pet1.especie = "Vira-lata";
		pet1.nome = "Luna";
		pet1.idade = 2;
		

        System.out.println(cliente);

		// System.out.println("O cliente " + cliente + " Possui um pet chamado " 
		// 		+ pet1.nome + " que tem " + pet1.idade + " anos de idade");
		
		OperacoesMatematicas math = new OperacoesMatematicas();
		
		int soma = math.somar(10, 35);
		System.out.println("Soma: " + soma);
		System.out.println("30 * 15: " + math.multiplicar(30, 15));
	}
}

