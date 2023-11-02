<?php

namespace App\Imports;

use App\Models\City;
use Maatwebsite\Excel\Concerns\Importable;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithProgressBar;

class CitiesImport implements ToModel, WithHeadingRow, WithProgressBar
{
    use Importable;

    public function model(array $row)
    {
        if(array_key_exists('codice_regione',$row)){
            return new City([
                'codice_regione'  => $row['codice_regione'],
                'codice_unita_territoriale_sovracomunale'  => $row['codice_dellunita_territoriale_sovracomunale_valida_a_fini_statistici'],
                'codice_provincia_storico'  => $row['codice_provincia_storico1'],
                'progressivo_del_comune'  => $row['progressivo_del_comune_2'],
                'codice_comune_formato_alfanumerico'  => $row['codice_comune_formato_alfanumerico'],
                'denominazione_italiana_straniera'  => $row['denominazione_italiana_e_straniera'],
                'name'  => $row['denominazione_in_italiano'],
                'denominazione_altra_lingua'  => $row['denominazione_altra_lingua'],
                'codice_ripartizione_geografica'  => $row['codice_ripartizione_geografica'],
                'ripartizione_geografica'  => $row['ripartizione_geografica'],
                'denominazione_regione'  => $row['denominazione_regione'],
                'denominazione_unita_territoriale sovracomunale'  => $row['denominazione_dellunita_territoriale_sovracomunale_valida_a_fini_statistici'],
                'tipologia unita_territoriale_sovracomunale'  => $row['tipologia_di_unita_territoriale_sovracomunale'],
                'flag_comune_capoluogo_citta_metropolitana'  => $row['flag_comune_capoluogo_di_provinciacitta_metropolitanalibero_consorzio'],
                'sigla_automobilistica'  => $row['sigla_automobilistica'],
                'codice_comune_formato_numerico'  => $row['codice_comune_formato_numerico'],
                'codice_comune_numerico_con_110_province'  => $row['codice_comune_numerico_con_110_province_dal_2010_al_2016'],
                'codice_comune_numerico_con_107_province'  => $row['codice_comune_numerico_con_107_province_dal_2006_al_2009'],
                'codice_comune_numerico_con_103_province'  => $row['codice_comune_numerico_con_103_province_dal_1995_al_2005'],
                'codice_catastale_del_comune'  => $row['codice_catastale_del_comune'],
                'codice_NUTS1_2010'  => $row['codice_nuts1_2010'],
                'codice_NUTS2_2010'  => $row['codice_nuts2_2010_3'],
                'codice_NUTS3_2010'  => $row['codice_nuts3_2010'],
                'codice_NUTS1_2021'  => $row['codice_nuts1_2021'],
                'codice_NUTS2_2021'  => $row['codice_nuts2_2021_3'],
                'codice_NUTS3_2021'  => $row['codice_nuts3_2021'],

            ]);
        }

    }

}
