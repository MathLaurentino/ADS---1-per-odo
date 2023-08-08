
public class ExemploString {
	public static void main(String[] args) {
		
		String str1, str2;
		str1 = "   O Palmeiras não tem mundial   ";
		
		// retira os espaços em branco
		str1 = str1.trim(); 
		System.out.println("retira os espaços em branco: [" + str1 + "] - trim() \n");
		
		
		// Retorna o tamanho da String
		System.out.println("Tamanho da String: " + str1.length() + " - length() \n");
		
		
		// Altera um pedaço da String
		str2 = str1.replace("Palmeiras", "Flamengo");
		System.out.println("Muda pedaços do texto: [" + str2 + "] - replace() \n");
		
		
		// Pega um pedaço da String
		str2 = str1.substring(6, 10);
		System.out.println("Pega um pedaço do texto: [" + str2 + "] - substring(6, 10) \n");
		
		
		
		// Procura uma substring
		String str3 = "matheus.laurentino.ifpr@gmail.com";
		int pos = str3.indexOf("@");
		System.out.println("Retorna a posição de algo: " + pos + " - .indexOf(@) \n");
		
		System.out.println("Aluno: " + str3.substring(0, str3.indexOf("@")) + " \n"
				+ "Email: " + str3.substring(str3.indexOf("@") + 1));
		
		
		//Converter de outros tipos para String
		int valor = 5;
		String str4 = String.valueOf(valor);
		System.out.println(str4); // "5"
		
		String conteudo = "5/6/7/8/9/30/45";
		String[] arrayConteudo = conteudo.split("/");
		System.out.println(arrayConteudo[3]);
		
	}
}