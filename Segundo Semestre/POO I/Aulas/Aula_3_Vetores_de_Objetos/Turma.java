package Aula_3_Vetores_de_Objetos;

public class Turma {

    private int numeroTurma;
    private String nomeCurso;
    private int ano;
    private int qtdeAlunos;
    private Aluno[] vetorAlunos;


    // CONSTRUCT //
    // --------- //

    public Turma() {
        this.vetorAlunos = new Aluno[40];
        this.qtdeAlunos = 0;
    }


    // GETTERS AND SETTER //
    // ------------------ // 

    public int getNumeroTurma() {
        return numeroTurma;
    }
    public void setNumeroTurma(int numeroTurma) {
        this.numeroTurma = numeroTurma;
    }

    public String getNomeCurso() {
        return nomeCurso;
    }
    public void setNomeCurso(String nomeCurso) {
        this.nomeCurso = nomeCurso;
    }

    public int getAno() {
        return ano;
    }
    public void setAno(int ano) {
        this.ano = ano;
    }

    public Aluno getAluno(int pos){
        return this.vetorAlunos[pos];
    }
    public void setAluno(Aluno a){
        if (this.qtdeAlunos < 40) {
            this.vetorAlunos[qtdeAlunos] = a;
            this.qtdeAlunos++;
        }
    }

    public int getQtdeAlunos(){
        return this.qtdeAlunos;
    }
    
}