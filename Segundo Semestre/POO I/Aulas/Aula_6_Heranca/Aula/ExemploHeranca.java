package Aula;
public class ExemploHeranca{

    public static void main(String[] args) {
        Pessoa p1 = new Pessoa();
        p1.setNome("matheus");
        p1.setEmail("matheus@gmail.com");
        p1.setIdade(19);

        Pessoa p2 = new Pessoa("Marcos", "marcos@gmail", 60);


        Aluno a1 = new Aluno();
        a1.setNome("matheus");
        a1.setEmail("matheus@gmail.com");
        a1.setIdade(19);
        a1.setNota1(10.0f);
        a1.setNota2(9.5f);
        a1.setNota3(5.2f);
        a1.setNota4(8.0f);

        System.out.println(a1.calcularMedia());

    }

}