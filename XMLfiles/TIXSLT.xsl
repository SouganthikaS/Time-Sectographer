<?xml version="1.0" encoding="UTF-8"?>
<xsl:transform version="1.0"
 xmlns:xsl="http://www.w3.org/1999/XSL/Transform">
<xsl:template match="/">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <style>
    table,th,td{
      border: 2px solid blueviolet;
      padding:5px;
      border-spacing:5px;
      border-radius:3px;
    }
  </style>
</head>
<body>
  <h2>Task Info</h2>
  <table>
    <tr>
      <th>Category</th>
      <th>Count</th>
    </tr>
    <xsl:for-each select="/tasksInfo/category">
    <tr>
      <td><xsl:value-of select="name"/></td>
      <td><xsl:value-of select="count"/></td>
    </tr>
    </xsl:for-each>
  </table>
</body>
</html>
</xsl:template>
</xsl:transform>

