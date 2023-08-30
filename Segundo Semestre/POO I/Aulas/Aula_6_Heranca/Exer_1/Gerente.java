public class Gerente extends Pessoa {

    private String formacaoAcademica;
    private String areaAtuacao;
    private int anoContratacao;

    public String getFormacaoAcademica() {
        return formacaoAcademica;
    }
    public void setFormacaoAcademica(String formacaoAcademica) {
        this.formacaoAcademica = formacaoAcademica;
    }
    
    public String getAreaAtuacao() {
        return areaAtuacao;
    }
    public void setAreaAtuacao(String areaAtuacao) {
        this.areaAtuacao = areaAtuacao;
    }
   
    public int getAnoContratacao() {
        return anoContratacao;
    }
    public void setAnoContratacao(int anoContratacao) {
        this.anoContratacao = anoContratacao;
    }
    
}
