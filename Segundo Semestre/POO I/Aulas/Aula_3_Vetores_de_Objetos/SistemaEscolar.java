package Aula_3_Vetores_de_Objetos;

import java.io.BufferedReader;
import java.io.InputStreamReader;
import Aula_3_Vetores_de_Objetos.Turma;
import Aula_3_Vetores_de_Objetos.Aluno;

public class SistemaEscolar {

    private Escola escola;
    BufferedReader reader;

    public static void main(String[] args) throws Exception {

        SistemaEscolar se = new SistemaEscolar();
        se.escola = new Escola();
        se.reader = new BufferedReader(new InputStreamReader(System.in));

        // System.out.println("Nome da turma:");
        // se.escola.setNome(Integer.parseInt(se.reader.readLine()));

        // System.out.println("Telefone:");
        // se.escola.setFone(se.reader.readLine());
        se.menu();
    }

    private void menu() throws Exception {
        String opcao = "";

        while (!opcao.equals(4)) {

            System.out.println("----------------------");
            System.out.println("[1] Cadastrar nova turma");
            System.out.println("[2] Listar turmas existentes");
            System.out.println("[3] Consultar uma turma");
            System.out.println("[4] Sair");
            opcao = this.reader.readLine();

            switch (opcao) {
                case "1":
                    System.out.println("oi Matheus");
                    this.cadastrarTurma();
                    break;
                case "2":
                    this.listarTurmas();
                    break;
                case "3":
                    this.consultarTurma();

                default:
                    break;
            }

        }
    }

    private void cadastrarTurma() throws Exception {
        Turma t = new Turma();

        System.out.println("CADASTRO DE TURMA");

        System.out.println("Numero da turma: ");
        t.setNumeroTurma(Integer.parseInt(reader.readLine()));

        System.out.println("Nome do curso: ");
        t.setNomeCurso(reader.readLine());

        System.out.println("Ano do curso: ");
        t.setAno(Integer.parseInt(reader.readLine()));

        System.out.println("------Alunos------");
        for (int i = 0; i < 40; i++) {
            System.out.println("Nome do aluno: ");
            String nome = reader.readLine();

            if (nome.equals("")) {
                break;
            }

            Aluno a = new Aluno();
            a.setNome(nome);

            System.out.println("Matricula do aluno: ");
            a.setMatricula(reader.readLine());

            System.out.println("Nota 1 do aluno: ");
            a.setNota1(Float.parseFloat(reader.readLine()));

            System.out.println("Nota 2 do aluno: ");
            a.setNota2(Float.parseFloat(reader.readLine()));

            System.out.println("Nota 3 do aluno: ");
            a.setNota3(Float.parseFloat(reader.readLine()));

            System.out.println("Nota 4 do aluno: ");
            a.setNota4(Float.parseFloat(reader.readLine()));
        }
    }

    private void listarTurmas() throws Exception {
        System.out.println("Relatório de Turmas");
        for (int i = 0; i < this.escola.getQtdeTurma; i++) {

            // forma 1
            Turma t = this.escola.getTurma(i);
            System.out.println("Numero: " + t.getNumeroTurma()
                    + " - Curso: " + t.getNomeCurso()
                    + " - Ano: " + t.getAno());

            // forma 2
            System.out.println("Numero: "
                    + this.escola.getTurma(i).getNumeroTurma()
                    + " - Curso: " + this.escola.getTurma(i).getNomeCurso()
                    + " - Ano: " + this.escola.getTurma(i).getAno());

        }
    }

    private void consultarTurma() throws Exception {

        for(int i = 0; i< this.escola.getQtdeTurma(); i++){
            Turma t = this.escola.getTurma(i);
            if(t.getNumeroTurma() == numTurma){
                System.out.println("[Alunos da turma]");
                int posAluno = 0;
                while(t.getAluno(posAluno) != null){
                    String linha = "Nome: " + t.getAluno(posAluno).getNome();
                    linha += " - Matricula: " + t.getAluno(posAluno).getMatricula();
                    linha += " - Media: " + t.getAluno(posAluno).calcularMedia();
                   
                }
            }
        }

    }
}
