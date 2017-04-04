<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : documento3.xsl
    Created on : 12 December 2016, 5:27 PM
    Author     : Fabio Elia Locatelli
    Description:
        Purpose of transformation follows.
-->

<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
    <xsl:output method="html"/>

    <!-- TODO customize transformation rules 
         syntax recommendation http://www.w3.org/TR/xslt 
    -->
    <xsl:template match="/">
        <html>
            <head>
                <title>XML Libros</title>
            </head>
            <body>
                <font face = "Helvetica" size = "2" color = "blue">
                    <h1>Ejemplo XML con Documento XSLT</h1>
                    <h2>Libro:</h2>
                    <xsl:value-of select = "root/libreria/libro/titulo"/>
                    <br/>
                    <h2>Autor:</h2>
                    <xsl:value-of select = "root/libreria/libro/autor"/>
                </font>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
