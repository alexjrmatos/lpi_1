package br.uniube;
import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.SQLException;
import java.sql.Statement;
import java.util.Scanner;
public class LojaTenis {

    public static void main(String[] args) {
        try {
            Class.forName("com.mysql.jdbc.Driver");
            Connection con = DriverManager.getConnection("jdbc:mysql://localhost:3306/db_projeto_1", "root", "root");
            Statement stm = con.createStatement();
            Scanner entrada = new Scanner(System.in);
            int opcao;
            do {
                System.out.println("Menu de Opcões");
                System.out.println("1 - Inserir produto");
                System.out.println("2 - Alterar produto");
                System.out.println("3 - Remover produto");
                System.out.println("4 - Consulta");
                System.out.println("5 - Procurar produto");
                System.out.println("6 - Sair");
                System.out.println("Digite a opcao desejada: ");
                opcao = entrada.nextInt();
                switch (opcao) {
                    case 1:
                        System.out.println("Informe a marca do produto que deseja cadastrar:");
                        String marcaProduto = entrada.next();
                        System.out.println("Informe o modelo do produto que deseja cadastrar:");
                        String modeloProduto = entrada.next();

                        String sqlCadastro = " INSERT INTO loja_tenis (marca, modelo) VALUES ('" + marcaProduto + "', '" + modeloProduto + "')";
                        stm.executeUpdate(sqlCadastro);
                        break;
                    case 2:
                        System.out.println("Informe o marca do produto que deseja alterar:");
                        String marcaProduto1 = entrada.next();
                        System.out.println("Informe o novo marca:");
                        String marcaProduto2 = entrada.next();
                        String sqlCadastro1 = " UPDATE loja_tenis set marca = '" + marcaProduto2 + "' where marca = '" + marcaProduto1 + "'";
                        stm.executeUpdate(sqlCadastro1);
                        break;
                    case 3:
                        System.out.println("Informe o marca do que deseja remover:");
                        String marcaProduto3 = entrada.next();
                        String sqlCadastro3 = " DELETE FROM loja_tenis where marca = '" + marcaProduto3 + "'";
                        stm.executeUpdate(sqlCadastro3);
                        break;
                    case 4:

                        String sqlConsulta = " SELECT * FROM loja_tenis ORDER BY id ";

                        ResultSet rs = stm.executeQuery(sqlConsulta);
                        while (rs.next()) {
                            int id = rs.getInt("id");
                            String marca = rs.getString("marca");
                            System.out.println("Id do Produto: " + id +
                                " marca: " + marca);
                        }
                        break;
                    case 5:
                        System.out.println("Informe algum marca que deseja procurar:");
                        String marcaProduto4 = entrada.next();
                        String SqlConsulta1 = "SELECT * FROM loja_tenis where marca like '" + marcaProduto4 + "%'";
                        ResultSet rs1 = stm.executeQuery(SqlConsulta1);
                        while (rs1.next()) {
                            int id = rs1.getInt("id");
                            String marca = rs1.getString("marca");
                            System.out.println("ID do Produto: " + id + " Marca: " + marca);
                        }
                }
            } while (opcao != 6);
            con.close();
        } catch (ClassNotFoundException e) {
            e.printStackTrace();
        } catch (SQLException e) {
            e.printStackTrace();
        }
    }
}