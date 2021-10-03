using System;
using System.Collections.Generic;
using System.Linq;
using System.Web;
using System.Web.UI;
using System.Web.UI.WebControls;
using System.Data;
using System.Data.SqlClient;

namespace WebApplication3
{
    public partial class _Default : Page
    {
        protected void Page_Load(object sender, EventArgs e)
        {

        }

        protected void Button1_Click(object sender, EventArgs e)
        {
            SqlConnection mySqlConnection;
            SqlCommand mySqlCommand;
            SqlDataReader mySqlDataReader;

            mySqlConnection = new SqlConnection();
            mySqlConnection.ConnectionString = "server = (local); user = user324; pwd = 123456; database = miguelbd";

            mySqlCommand = new SqlCommand();
            mySqlCommand.CommandText = "SELECT * FROM(Select (case tabla_temporal.promedio when 58 then 'LP' when 65 then 'CB' when 63 then 'SC' end) as departamento, tabla_temporal.promedio from	(select avg(tmp2.notaf) as promedio	from (Select * from personas) tmp1, (Select * from notas) tmp2 where tmp1.ci = tmp2.ci	group by tmp1.departamento)tabla_temporal) AS SourceTable PIVOT(AVG([promedio]) FOR [departamento] IN([LP], [CB], [SC])) AS PivotTable;";
            mySqlCommand.CommandType = CommandType.Text;
            mySqlCommand.Connection = mySqlConnection;

            mySqlCommand.Connection.Open();
            mySqlDataReader = mySqlCommand.ExecuteReader(CommandBehavior.CloseConnection);
            GridView1.DataSource = mySqlDataReader;
            GridView1.DataBind();
            

            mySqlCommand.Dispose();
            mySqlConnection.Dispose();
            mySqlConnection.Close();

            /*
            SELECT * FROM(
                Select (case tabla_temporal.promedio when 58 then 'LP' when 65 then 'CB' when 63 then 'SC' end) as departamento, tabla_temporal.promedio from
	            (select avg(tmp2.notaf) as promedio
	            from (Select * from personas) tmp1, (Select * from notas) tmp2
	            where tmp1.ci = tmp2.ci	group by tmp1.departamento)tabla_temporal
            ) AS SourceTable PIVOT(AVG([promedio]) FOR [departamento] IN([LP], [CB], [SC])) AS PivotTable;
            */

        }
    }
}