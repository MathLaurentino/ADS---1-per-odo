public class Aluno extends Pessoa implements UsuarioBiblioteca{

    private int numMatricula;
    private int ano;
    private String turma;

    
    public String retirarLivro(String nomeLivro) {
        return "Aluno " + this.nomeCompleto() + " retirou o livro " + nomeLivro;
    }


    //GETTERS AND SETTERS
    public int getNumMatricula() {
        return numMatricula;
    }
    public void setNumMatricula(int numMatricula) {
        this.numMatricula = numMatricula;
    }
    
    public int getAno() {
        return ano;
    }
    public void setAno(int ano) {
        this.ano = ano;
    }

    public String getTurma() {
        return turma;
    }
    public void setTurma(String turma) {
        this.turma = turma;
    }

    

}
