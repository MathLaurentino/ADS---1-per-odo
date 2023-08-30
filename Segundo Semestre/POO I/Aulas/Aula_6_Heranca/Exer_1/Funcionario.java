public abstract class Funcionario extends Pessoa {
    
    private float salario;
    private int anoContratacao;
    private String horarioTrabalho;
    
    public float getSalario() {
        return salario;
    }
    public void setSalario(float salario) {
        this.salario = salario;
    }
    
    public int getAnoContratacao() {
        return anoContratacao;
    }
    public void setAnoContratacao(int anoContratacao) {
        this.anoContratacao = anoContratacao;
    }
    
    public String getHorarioTrabalho() {
        return horarioTrabalho;
    }
    public void setHorarioTrabalho(String horarioTrabalho) {
        this.horarioTrabalho = horarioTrabalho;
    }

}
