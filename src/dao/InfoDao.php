<?php


class InfoDao
{
    private MysqlAdapter $mysqlAdapter;
    public function __construct(MysqlAdapter $mysqlAdapter)
    {
        $this->mysqlAdapter = $mysqlAdapter;
    }

    /** Retorna una lista de usuarios
     * @return Info[]
     */
    public function select()
    {
        $resultset = ($this->mysqlAdapter)->query("SELECT * FROM info");
        $row = mysqli_fetch_assoc($resultset);
        $mapa = $row['info_mapa'] ?? "";
        if (strpos($mapa, 'iframe') === false) {
            $mapa = '<iframe src="' . $mapa . '" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>';
        }
        $row['info_mapa'] = $mapa;
        return $this->schematize($row);
    }

    public function update(
        string $info_nombre,
        string $info_filosofia,
        string $info_resumen,
        string $info_mision,
        string $info_vision,
        string $info_mapa,
        string $info_direccion,
        string $info_ciudad,
        string $info_telefono,
        string $info_celular,
        string $info_email
    ): bool {
        $info_nombre = addslashes($info_nombre);
        $info_filosofia = addslashes($info_filosofia);
        $info_resumen = addslashes($info_resumen);
        $info_mision = addslashes($info_mision);
        $info_vision = addslashes($info_vision);
        $last = date("Y-m-d H:i:s");
        $resultset = ($this->mysqlAdapter)->query("
            UPDATE info SET     
                info_nombre = '$info_nombre', 
                info_filosofia = '$info_filosofia', 
                info_resumen = '$info_resumen', 
                info_mision = '$info_mision', 
                info_vision = '$info_vision', 
                info_mapa = '$info_mapa', 
                info_direccion = '$info_direccion', 
                info_ciudad = '$info_ciudad', 
                info_telefono = '$info_telefono', 
                info_celular = '$info_celular', 
                info_email = '$info_email',
                info_last = '$last'
            ");
        if ($resultset) {
            return true;
        }
        return false;
    }

    private function schematize($row)
    {
        $PATH_DEFAULT = $_ENV['HTTP_DOMAIN'] . "public/img/";
        $PATH_FILES = $_ENV['HTTP_DOMAIN'] . "public/img.info/";

        // case logo
        // $row['info_logo_url'] = $this->getContent('logo.svg');
        $row['info_logo_url'] = $PATH_DEFAULT . 'logo.png?last=' . $row['info_last'];
        if ($row['info_logo'] != '' && $row['info_logo'] != null) $row['info_logo_url'] = $PATH_FILES . $row['info_logo'] . "?last=" . $row['info_last'];
        $row['info_logo_url2'] = $PATH_DEFAULT . 'logo.png?last=' . $row['info_last'];
        if ($row['info_logo'] != '' && $row['info_logo'] != null) $row['info_logo_url2'] = $PATH_FILES . $row['info_logo'] . "?last=" . $row['info_last'];

        // case icon
        // $row['info_icon_url'] = $this->getContent('icon.svg');
        $row['info_icon_url'] = $PATH_DEFAULT . 'icon.png?last=' . $row['info_last'];
        if ($row['info_icon'] != '' && $row['info_icon'] != null) $row['info_icon_url'] = $PATH_FILES . $row['info_icon'] . "?last=" . $row['info_last'];
        $row['info_icon_url2'] = $PATH_DEFAULT . 'icon.png';
        if ($row['info_icon'] != '' && $row['info_icon'] != null) $row['info_icon_url2'] = $PATH_FILES . $row['info_icon'] . "?last=" . $row['info_last'];

        return $row;
    }

    private function getContent($file = 'logo.svg')
    {
        ob_start();
        include('./public/img/' . $file);
        $content = ob_get_clean();
        return $content;
    }
}
