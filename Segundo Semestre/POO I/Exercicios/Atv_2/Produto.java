public class Produto {
    
    private int codigo;
    private String nomeProduto;
    private double precoVenda;


    public int getCodigo() {
        return codigo;
    }
    public void setCodigo(int codigo) {
        this.codigo = codigo;
    }

    public String getNomeProduto() {
        return nomeProduto;
    }
    public void setNomeProduto(String nomeProduto) {
        this.nomeProduto = nomeProduto;
    }

    public double getPrecoVenda() {
        return precoVenda;
    }
    public void setPrecoVenda(double precoVenda, double margemLucro) {
        this.precoVenda = precoVenda * (1 + margemLucro / 100);
    }

    @Override
    public String toString() {
        return "PrecoVenda [codigo=" + codigo + ", nomeProduto=" + nomeProduto + ", precoVenda=" + precoVenda + "]";
    } 

}
