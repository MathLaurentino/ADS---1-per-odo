public class Vendedor extends Funcionario {

    private String areaDeAtuacao;
    private int quantidadeProdutosVendidos;
    private float porcentagemComissao;

    public String getAreaDeAtuacao() {
        return areaDeAtuacao;
    }
    public void setAreaDeAtuacao(String areaDeAtuacao) {
        this.areaDeAtuacao = areaDeAtuacao;
    }
    
    public int getQuantidadeProdutosVendidos() {
        return quantidadeProdutosVendidos;
    }
    public void setQuantidadeProdutosVendidos(int quantidadeProdutosVendidos) {
        this.quantidadeProdutosVendidos = quantidadeProdutosVendidos;
    }
    
    public float getPorcentagemComissao() {
        return porcentagemComissao;
    }
    public void setPorcentagemComissao(float porcentagemComissao) {
        this.porcentagemComissao = porcentagemComissao;
    }

}
