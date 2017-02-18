<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : documento4.xsl
    Created on : 12 December 2016, 6:33 PM
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
                <title>Libreria XSL</title>
            </head>
            <body>
                <font face = "Helvetica" size = "2" color = "blue">
                    <xsl:for-each select = "root/libreria/libro">
                        <h2>Titulo:</h2><b><i><xsl:value-of select = "titulo"/></i></b>
                        <br/>
                        <h2>Autor:</h2><xsl:value-of select = "autor"/>
                        <br/>
                        <h2>Editorial:</h2><xsl:value-of select = "editorial"/>
                        <hr></hr>
                    </xsl:for-each>
                </font>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
