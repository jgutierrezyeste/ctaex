<?php

namespace Database\Seeders;

use App\Models\Menu;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class MenusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /*Menu expedientes*/
        $m1 = Menu::create([
            'name'=>'Expedientes',
            'slug'=>'expedientes',
            'parent'=>0,
            'order'=>0,
        ]);
            /*submenu expedintes*/
            Menu::create([
                'name'=>'Indexar',
                'slug'=>'indexar',
                'parent'=>$m1->id,
                'order'=>0,
            ]);

            Menu::create([
                'name'=>'Iniciar',
                'slug'=>'iniciar',
                'parent'=>$m1->id,
                'order'=>1,
            ]);

            
            Menu::create([
                'name'=>'Modificar',
                'slug'=>'modificar1',
                'parent'=>$m1->id,
                'order'=>2,
            ]);

            /*submenu mandar oficios*/
            $submenuExpOficios= Menu::create([
                'name'=>'Mandar Oficios',
                'slug'=>'mandar oficios1',
                'parent'=>$m1->id,
                'order'=>3,
            ]);
            
                        Menu::create([
                            'name'=>'Acuerdo de Tutor',
                            'slug'=>'acuerdo de tutor1',
                            'parent'=>$submenuExpOficios->id,
                            'order'=>0,
                        ]);

                        Menu::create([
                            'name'=>'Acuerdo de Defensor Judicial',
                            'slug'=>'acuerdo de defensor judicial1',
                            'parent'=>$submenuExpOficios->id,
                            'order'=>1,
                        ]);

                        Menu::create([
                            'name'=>'Acuerdo de Curador',
                            'slug'=>'acuerdo de curador1',
                            'parent'=>$submenuExpOficios->id,
                            'order'=>2,
                        ]);


/*menu tutelas*/
        $m2 = Menu::create([
            'name'=>'Tutelas',
            'slug'=>'tutelas',
            'parent'=>0,
            'order'=>1,
        ]);
        
            /*submenu tutelas*/
            
            Menu::create([
                'name'=>'Modificar',
                'slug'=>'modificar2',
                'parent'=>$m2->id,
                'order'=>0,
            ]);

            Menu::create([
                'name'=>'Consultar',
                'slug'=>'consultar2',
                'parent'=>$m2->id,
                'order'=>1,
            ]);

            $submenuTutOficios = Menu::create([ 
                'name'=>'Mandar Oficios',
                'slug'=>'mandar oficios2',
                'parent'=>$m2->id,
                'order'=>2,
            ]);

                /*submenu tutela oficios*/
                $submenuTutAyuntamiento = Menu::create([
                    'name'=>'Ayuntamiento',
                    'slug'=>'ayuntamiento2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>0,
                ]);

                        Menu::create([
                            'name'=>'Certificado Bienes',
                            'slug'=>'certificado bienes2',
                            'parent'=>$submenuTutAyuntamiento->id,
                            'order'=>0,
                        ]);
                        Menu::create([
                            'name'=>'Informe Ayuntamiento Servicios Sociales',
                            'slug'=>'informe ayuntamiento servicios sociales2',
                            'parent'=>$submenuTutAyuntamiento->id,
                            'order'=>1,
                        ]);

                Menu::create([
                    'name'=>'P.N.C',
                    'slug'=>'PNC2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>1,
                ]);
                Menu::create([
                    'name'=>'Bancos',
                    'slug'=>'bancos2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>2,
                ]);
                Menu::create([
                    'name'=>'Centros',
                    'slug'=>'centros2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>3,
                ]);
                Menu::create([
                    'name'=>'Seguridad Social',
                    'slug'=>'seguridad social2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>4,
                ]);
                Menu::create([
                    'name'=>'Juzgado',
                    'slug'=>'juzgado2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>5,
                ]);
                Menu::create([
                    'name'=>'Autorizacion Judicial Internamiento',
                    'slug'=>'autorizacion judcicial internamiento2',
                    'parent'=>$submenuTutOficios->id,
                    'order'=>6,
                ]);
                
        /*submenu inventarios*/
        $submenuTutInventarios = Menu::create([
            'name'=>'Inventarios',
            'slug'=>'inventarios2',
            'parent'=>$m2->id,
            'order'=>2,
        ]);

                Menu::create([
                    'name'=>'De Bienes',
                    'slug'=>'de bienes2',
                    'parent'=>$submenuTutInventarios->id,
                    'order'=>0,
                ]);
                Menu::create([
                    'name'=>'Informe Anual',
                    'slug'=>'informe anual2',
                    'parent'=>$submenuTutInventarios->id,
                    'order'=>1,
                ]);
                Menu::create([
                    'name'=>'Fallecimiento',
                    'slug'=>'fallecimiento2',
                    'parent'=>$submenuTutInventarios->id,
                    'order'=>2,
                ]);





/* menu curatelas*/
        $m3 = Menu::create([
            'name'=>'Curatelas',
            'slug'=>'curatelas',
            'parent'=>0,
            'order'=>2,
        ]);

                Menu::create([
                    'name'=>'Modificar',
                    'slug'=>'modificar3',
                    'parent'=>$m3->id,
                    'order'=>0,
                ]);

                Menu::create([
                    'name'=>'Consultar',
                    'slug'=>'consultar3',
                    'parent'=>$m3->id,
                    'order'=>1,
                ]);

                $submenuCurOficios = Menu::create([ 
                    'name'=>'Mandar Oficios',
                    'slug'=>'mandar oficios3',
                    'parent'=>$m3->id,
                    'order'=>2,
                ]);

                        /*submenu tutela oficios*/
                        $submenuCurAyuntamiento = Menu::create([
                            'name'=>'Ayuntamiento',
                            'slug'=>'ayuntamiento3',
                            'parent'=>$submenuTutOficios->id,
                            'order'=>0,
                        ]);

                                Menu::create([
                                    'name'=>'Certificado Bienes',
                                    'slug'=>'certificado bienes3',
                                    'parent'=>$submenuCurAyuntamiento->id,
                                    'order'=>0,
                                ]);
                                Menu::create([
                                    'name'=>'Informe Ayuntamiento Servicios Sociales',
                                    'slug'=>'informe ayuntamiento servicios sociales3',
                                    'parent'=>$submenuCurAyuntamiento->id,
                                    'order'=>1,
                                ]);

                        Menu::create([
                            'name'=>'P.N.C',
                            'slug'=>'PNC3',
                            'parent'=>$submenuCurOficios->id,
                            'order'=>1,
                        ]);
                        Menu::create([
                            'name'=>'Bancos',
                            'slug'=>'bancos3',
                            'parent'=>$submenuCurOficios->id,
                            'order'=>2,
                        ]);
                        Menu::create([
                            'name'=>'Centros',
                            'slug'=>'centros3',
                            'parent'=>$submenuCurOficios->id,
                            'order'=>3,
                        ]);
                        Menu::create([
                            'name'=>'Seguridad Social',
                            'slug'=>'seguridad social3',
                            'parent'=>$submenuCurOficios->id,
                            'order'=>4,
                        ]);
                        Menu::create([
                            'name'=>'Juzgado',
                            'slug'=>'juzgado3',
                            'parent'=>$submenuCurOficios->id,
                            'order'=>5,
                        ]);
                        Menu::create([
                            'name'=>'Autorizacion Judicial Internamiento',
                            'slug'=>'autorizacion judicial internamiento3',
                            'parent'=>$submenuCurOficios->id,
                            'order'=>6,
                        ]);
                        
                /*submenu inventarios*/
                $submenuCurInventarios = Menu::create([
                    'name'=>'Inventarios',
                    'slug'=>'inventarios3',
                    'parent'=>$m3->id,
                    'order'=>3,
                ]);

                        Menu::create([
                            'name'=>'De Bienes',
                            'slug'=>'de bienes3',
                            'parent'=>$submenuCurInventarios->id,
                            'order'=>0,
                        ]);
                        Menu::create([
                            'name'=>'Informe Anual',
                            'slug'=>'informe anual3',
                            'parent'=>$submenuCurInventarios->id,
                            'order'=>1,
                        ]);
                        Menu::create([
                            'name'=>'Fallecimiento',
                            'slug'=>'fallecimiento3',
                            'parent'=>$submenuCurInventarios->id,
                            'order'=>2,
                        ]);




 /*menu adminsitracion de bienes*/       
        $m4 = Menu::create([
            'name'=>'Administracion Bienes',
            'slug'=>'administracion bienes',
            'parent'=>0,
            'order'=>3,
        ]);

                Menu::create([
                    'name'=>'Modificar',
                    'slug'=>'modificar4',
                    'parent'=>$m4->id,
                    'order'=>0,
                ]);

                Menu::create([
                    'name'=>'Consultar',
                    'slug'=>'consultar4',
                    'parent'=>$m4->id,
                    'order'=>1,
                ]);

                $submenuAdmOficios = Menu::create([ 
                    'name'=>'Mandar Oficios',
                    'slug'=>'mandar oficios4',
                    'parent'=>$m4->id,
                    'order'=>2,
                ]);

                        /*submenu administracion bienes*/
                        $submenuAdmAyuntamiento = Menu::create([
                            'name'=>'Ayuntamiento',
                            'slug'=>'ayuntamiento4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>0,
                        ]);

                                Menu::create([
                                    'name'=>'Certificado Bienes',
                                    'slug'=>'certificado bienes4',
                                    'parent'=>$submenuAdmAyuntamiento->id,
                                    'order'=>0,
                                ]);
                                Menu::create([
                                    'name'=>'Informe Ayuntamiento Servicios Sociales',
                                    'slug'=>'informe ayuntamiento servicios sociales4',
                                    'parent'=>$submenuAdmAyuntamiento->id,
                                    'order'=>1,
                                ]);

                                Menu::create([
                                    'name'=>'Exposicion Caso',
                                    'slug'=>'exposicion caso',
                                    'parent'=>$submenuAdmAyuntamiento->id,
                                    'order'=>2,
                                ]);

                        Menu::create([
                            'name'=>'P.N.C',
                            'slug'=>'PNC4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>1,
                        ]);
                        Menu::create([
                            'name'=>'Bancos',
                            'slug'=>'bancos4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>2,
                        ]);
                        Menu::create([
                            'name'=>'Centros',
                            'slug'=>'centros4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>3,
                        ]);
                        Menu::create([
                            'name'=>'Seguridad Social',
                            'slug'=>'seguridad social4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>4,
                        ]);
                        Menu::create([
                            'name'=>'Juzgado',
                            'slug'=>'juzgado4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>5,
                        ]);
                        Menu::create([
                            'name'=>'Autorizacion Judicial Internamiento',
                            'slug'=>'autorizacion judicial internamiento4',
                            'parent'=>$submenuAdmOficios->id,
                            'order'=>6,
                        ]);
                        
                /*submenu inventarios*/
                $submenuAdmInventarios = Menu::create([
                    'name'=>'Inventarios',
                    'slug'=>'inventarios4',
                    'parent'=>$m4->id,
                    'order'=>3,
                ]);

                        Menu::create([
                            'name'=>'De Bienes',
                            'slug'=>'de bienes4',
                            'parent'=>$submenuAdmInventarios->id,
                            'order'=>0,
                        ]);
                        Menu::create([
                            'name'=>'Informe Anual',
                            'slug'=>'informe anual4',
                            'parent'=>$submenuAdmInventarios->id,
                            'order'=>1,
                        ]);
                        Menu::create([
                            'name'=>'Fallecimiento',
                            'slug'=>'fallecimiento4',
                            'parent'=>$submenuAdmInventarios->id,
                            'order'=>2,
                        ]);


        
       

    }
}
