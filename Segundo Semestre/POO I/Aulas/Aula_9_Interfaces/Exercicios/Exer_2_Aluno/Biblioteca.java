public class Biblioteca {

    public static void main(String[] args) throws Exception {
        
        Aluno a1 = new Aluno();

        a1.setNome("Matheus");
        a1.setSobrenome("Laurentino");
        a1.setCpf(298092865);
        a1.setNumMatricula(3745639);
        a1.setTurma("TADS");
        a1.setAno(2023);

        String mensagem = a1.retirarLivro("Branca de Neve");

        System.out.println(mensagem);

    }

    
}
