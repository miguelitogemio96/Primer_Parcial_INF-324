<%@ Page Title="Home Page" Language="C#" MasterPageFile="~/Site.Master" AutoEventWireup="true" CodeBehind="Default.aspx.cs" Inherits="WebApplication3._Default" %>

<asp:Content ID="BodyContent" ContentPlaceHolderID="MainContent" runat="server">

 


    <asp:Label ID="Label4" runat="server" Font-Size="X-Large" Font-Bold="true" ForeColor="Teal">
        Promedio de notas por Departamentos:
    </asp:Label>
       <asp:Button ID="Button1" runat="server" Text="Calcular" OnClick="Button1_Click" />
    <br /><br />
    <div>
        <asp:GridView 
            ID="GridView1" 
            runat="server"
            BackColor="HotPink"
            ForeColor="WhiteSmoke"
            HeaderStyle-BackColor="DarkOrange"
            BorderColor="Orange" Width="534px"
            >
        </asp:GridView>
    </div>
    
    

</asp:Content>
