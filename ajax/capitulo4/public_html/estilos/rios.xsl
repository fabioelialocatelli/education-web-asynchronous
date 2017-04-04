<?xml version="1.0" encoding="UTF-8"?>

<!--
    Document   : rios.xsl
    Created on : 12 December 2016, 6:53 PM
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
                <title>Rios de Rusia</title>
                <style>
                    * {
                    font-family: Helvetica;
                    font-size: 12pt;
                    }
                    table, th, td {
                    border: 1px solid black;
                    padding: 0.25em;
                    }
                </style>
            </head>
            <body>               
                <table>
                    <tr>
                        <th>Nombre</th>
                        <th>Caudal Medio</th>
                        <th>Superficie Cuenca</th>
                        <th>Longitud</th>
                        <th>Coordenadas Desembocadura</th>
                    </tr>
                    <xsl:for-each select = "root/rios/rio">
                        <tr>
                            <td>
                                <xsl:value-of select = "localName"/>
                            </td>
                            <td>
                                <xsl:value-of select = "averageDischarge"/> m3/s</td>
                            <td>
                                <xsl:value-of select = "catchmentBasin"/> km2</td>
                            <td>
                                <xsl:value-of select = "length"/> km</td>
                            <td>
                                <xsl:value-of select = "mouthLocation"/>
                            </td>
                        </tr>
                    </xsl:for-each>                        
                </table>           
            </body>
        </html>
    </xsl:template>

</xsl:stylesheet>
