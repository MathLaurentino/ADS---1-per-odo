public class Livro extends ItemBiblioteca {
    
    String autor;
    int qtPaginas;
    String genero;


    public String getAutor() {
        return autor;
    }
    public void setAutor(String autor) {
        this.autor = autor;
    }
    
    public int getQtPaginas() {
        return qtPaginas;
    }
    public void setQtPaginas(int qtPaginas) {
        this.qtPaginas = qtPaginas;
    }
    
    public String getGenero() {
        return genero;
    }
    public void setGenero(String genero) {
        this.genero = genero;
    }

}
