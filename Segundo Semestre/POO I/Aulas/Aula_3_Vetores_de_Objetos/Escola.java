package Aula_3_Vetores_de_Objetos;

public class Escola {

    private String nome;
    private String fone;
    private int qtdeTurmas;
    private Turma[] vetorTurmas;


    // CONSTRUCT //
    // --------- //

    public Escola() {
        this.vetorTurmas = new Turma[40];
        this.qtdeTurmas = 0;
    }


    // GETTERS AND SETTER //
    // ------------------ // 

    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }

    public String getFone() {
        return fone;
    }
    public void setFone(String fone) {
        this.fone = fone;
    }

    public Turma getTurma(int pos){
        return this.vetorTurmas[pos];
    }
    public void setTurma(Turma a){
        if (this.qtdeTurmas < 40) {
            this.vetorTurmas[qtdeTurmas] = a;
            this.qtdeTurmas++;
        }
    }

    public int getQtdeTurma(){
        return this.qtdeTurmas;
    }

    
}
