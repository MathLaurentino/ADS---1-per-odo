public abstract class ItemBiblioteca {
    
    String nome;
    int anoDeAquisicao;
    String codigo;
    boolean emprestavel;


    public String getNome() {
        return nome;
    }
    public void setNome(String nome) {
        this.nome = nome;
    }
    
    public int getAnoDeAquisicao() {
        return anoDeAquisicao;
    }
    public void setAnoDeAquisicao(int anoDeAquisicao) {
        this.anoDeAquisicao = anoDeAquisicao;
    }
    
    
    public boolean isEmprestavel() {
        return emprestavel;
    }
    public void setEmprestavel(boolean emprestavel) {
        this.emprestavel = emprestavel;
    }

}
