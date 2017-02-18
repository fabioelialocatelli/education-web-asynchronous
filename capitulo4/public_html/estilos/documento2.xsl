<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : documento2.xsl
    Created on : 10 December 2016, 12:05 PM
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
                <title>documento2.xsl</title>
            </head>
            <body>
                <font face = "Verdana" size = "2" color = "red">
                    <xsl:for-each select = "root/texto/mensaje">
                        <b>
                            <xsl:value-of select = "./@div"/>
                            -
                            <xsl:value-of select = "./@texto"/>
                        </b>
                        <br/>
                    </xsl:for-each>
                </font>
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
