<?php 

function alls_rayons():array{
    $rayons=[
        ['id'=>7,'rayon'=>'Astrologie'],
        ['id'=>2,'rayon'=>'Sciences'],
        ['id'=>4,'rayon'=>'Geographie'],
        ['id'=>6,'rayon'=>'Anglais'],
        ['id'=>3,'rayon'=>'Histoire'],
        ['id'=>5,'rayon'=>'Sociologie'],
        ['id'=>1,'rayon'=>'Litterature'],
    ];
    return $rayons;
}
function alls_auteurs():array{
    $auteurs=[
        ['id'=>1,'nom'=>'Guillaume','prenom'=>'Musso','profession'=>'Ecrivain'],
        ['id'=>2,'nom'=>'Albert','prenom'=>'Camus','profession'=>'Professeur ecrivain'],
        ['id'=>3,'nom'=>'Valerie','prenom'=>'Perin','profession'=>'Scenariste'],
        ['id'=>4,'nom'=>'Olivier','prenom'=>'Norek','profession'=>'Scenariste'],
        ['id'=>5,'nom'=>'Albert','prenom'=>'Camus','profession'=>'Philosophie'],
        ['id'=>6,'nom'=>'Michael','prenom'=>'Connelly','profession'=>'Romanciers'],
        ['id'=>7,'nom'=>'Miguel','prenom'=>'Ruiz','profession'=>'Ecrivain'],
    ];
    return $auteurs;
}
function alls_exemplaires():array{
    $exemplaires=[
        ['id'=>1,'code'=>'001','enregistrement'=>[10,5,2021]],
        ['id'=>2,'code'=>'002','enregistrement'=>[10,5,2021]],
        ['id'=>3,'code'=>'003','enregistrement'=>[10,5,2021]],
        ['id'=>4,'code'=>'004','enregistrement'=>[10,5,2021]],
        ['id'=>5,'code'=>'005','enregistrement'=>[10,5,2021]],
        ['id'=>6,'code'=>'006','enregistrement'=>[10,5,2021]],
        ['id'=>7,'code'=>'007','enregistrement'=>[10,5,2021]],
        ['id'=>8,'code'=>'008','enregistrement'=>[10,5,2021]],
        ['id'=>9,'code'=>'009','enregistrement'=>[10,5,2021]],
        ['id'=>10,'code'=>'010','enregistrement'=>[14,6,2021]],
        ['id'=>11,'code'=>'011','enregistrement'=>[14,6,2021]],
        ['id'=>12,'code'=>'012','enregistrement'=>[14,6,2021]],
        ['id'=>13,'code'=>'013','enregistrement'=>[14,6,2021]],
        ['id'=>14,'code'=>'014','enregistrement'=>[14,6,2021]],
        ['id'=>15,'code'=>'015','enregistrement'=>[14,6,2021]],
        ['id'=>16,'code'=>'016','enregistrement'=>[14,6,2021]],
        ['id'=>17,'code'=>'017','enregistrement'=>[8,7,2021]],
        ['id'=>18,'code'=>'018','enregistrement'=>[8,7,2021]],
        ['id'=>19,'code'=>'019','enregistrement'=>[8,7,2021]],
        ['id'=>20,'code'=>'020','enregistrement'=>[8,7,2021]],
        ['id'=>21,'code'=>'021','enregistrement'=>[8,7,2021]],
        ['id'=>22,'code'=>'022','enregistrement'=>[8,7,2021]],
        ['id'=>23,'code'=>'023','enregistrement'=>[8,7,2021]],
        ['id'=>24,'code'=>'024','enregistrement'=>[8,7,2021]],
        ['id'=>25,'code'=>'025','enregistrement'=>[15,7,2021]],
        ['id'=>25,'code'=>'025','enregistrement'=>[15,8,2021]],
        ['id'=>26,'code'=>'026','enregistrement'=>[15,8,2021]],
        ['id'=>27,'code'=>'027','enregistrement'=>[15,8,2021]],
        ['id'=>28,'code'=>'028','enregistrement'=>[15,8,2021]],
        ['id'=>29,'code'=>'029','enregistrement'=>[18,9,2021]],
        ['id'=>30,'code'=>'030','enregistrement'=>[18,9,2021]],
   
 
    ];
    return $exemplaires;
}
function alls_ouvrages():array{
    $ouvragres=[
        ['id'=>1,'code'=>'L001','titre'=>'Un si beau monde','edition'=>'2021','id_auteur'=>1,'id_exemplaire'=>[1,2,3],'id_rayon'=>7],
        ['id'=>2,'code'=>'L002','titre'=>'Le monde sefondre','edition'=>'2011','id_auteur'=>1,'id_exemplaire'=>[4,5,6],'id_rayon'=>7],
        ['id'=>3,'code'=>'L003','titre'=>'Faby la rakadiou','edition'=>'2013','id_auteur'=>5,'id_exemplaire'=>[7,8,9],'id_rayon'=>1],
        ['id'=>4,'code'=>'L004','titre'=>'Foot foot et foot','edition'=>'2020','id_auteur'=>3,'id_exemplaire'=>[10,11,12],'id_rayon'=>2],
        ['id'=>5,'code'=>'L005','titre'=>'Le jugement dernier','edition'=>'2009','id_auteur'=>1,'id_exemplaire'=>[13,14,15],'id_rayon'=>6],
        ['id'=>6,'code'=>'L006','titre'=>'Mondial 2022','edition'=>'2015','id_auteur'=>7,'id_exemplaire'=>[16,17,18],'id_rayon'=>4],
        ['id'=>7,'code'=>'L007','titre'=>'Chateau de la Haie','edition'=>'2014','id_auteur'=>6,'id_exemplaire'=>[19,20,21],'id_rayon'=>3],
        ['id'=>8,'code'=>'L008','titre'=>'La pulga','edition'=>'2000','id_auteur'=>6,'id_exemplaire'=>[22,21,22],'id_rayon'=>3],
        ['id'=>9,'code'=>'L009','titre'=>'Its my life','edition'=>'2008','id_auteur'=>2,'id_exemplaire'=>[23,24,25],'id_rayon'=>7],
        ['id'=>10,'code'=>'L010','titre'=>'los moe de lam','edition'=>'2016','id_auteur'=>1,'id_exemplaire'=>[26,27],'id_rayon'=>5],
        ['id'=>11,'code'=>'L011','titre'=>'Bailo le crack','edition'=>'2012','id_auteur'=>7,'id_exemplaire'=>[28],'id_rayon'=>5],
        ['id'=>12,'code'=>'L012','titre'=>'Sous le choc','edition'=>'2022','id_auteur'=>3,'id_exemplaire'=>[29],'id_rayon'=>7],
        ['id'=>13,'code'=>'L013','titre'=>'La nuit de belvrin','edition'=>'2010','id_auteur'=>7,'id_exemplaire'=>[30],'id_rayon'=>5],

    ];
    return $ouvragres;
}

function alls_prets():array{
    $prets=[
        ['id'=>1,'nom'=>'Leibou','prenom'=>'Musso','date_e'=>[1,01,2021],'date_rp'=>[16,01,2021],'id_adh'=>1,'date_rr'=>[18,01,2021],'titre'=>'Le monde sefondre','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>2,'nom'=>'Faby','prenom'=>'Ndiaye','date_e'=>[2,01,2021],'date_rp'=>[17,01,2021],'id_adh'=>2,'date_rr'=>[17,01,2021],'titre'=>'La nuit de belvrin','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>3,'nom'=>'Faby','prenom'=>'Ndiaye','date_e'=>[3,01,2021],'date_rp'=>[0,0,0],'id_adh'=>4,'date_rr'=>[19,01,20221],'titre'=>'Un si beau monde','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>4,'nom'=>'Nuur','prenom'=>'Ndoye','date_e'=>[4,01,2021],'date_rp'=>[19,01,2021],'id_adh'=>5,'date_rr'=>[25,01,2021],'titre'=>'Sous le choc','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>5,'nom'=>'Pounta','prenom'=>'Fall','date_e'=>[5,01,2021],'date_rp'=>[20,01,2021],'id_adh'=>6,'date_rr'=>[20,01,2021],'titre'=>'Bailo le crack','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>6,'nom'=>'Pia','prenom'=>'Sy','date_e'=>[6,01,2021],'date_rp'=>[0,0,0],'id_adh'=>6,'date_rr'=>[24,01,2021],'titre'=>'los moe de lam','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>7,'nom'=>'Ibou','prenom'=>'Sow','date_e'=>[7,01,2021],'date_rp'=>[22,01,2021],'id_adh'=>7,'date_rr'=>[22,01,2021],'titre'=>'Its my life','edition','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>8,'nom'=>'Saliou','prenom'=>'Sall','date_e'=>[8,01,2021],'date_rp'=>[23,12,2021],'id_adh'=>8,'date_rr'=>[27,01,2021],'titre'=>'La pulga','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>9,'nom'=>'Cheikh','prenom'=>'Sylla','date_e'=>[9,01,2021],'date_rp'=>[0,0,0],'id_adh'=>9,'date_rr'=>[28,01,2021],'titre'=>'Chateau de la Haie','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>10,'nom'=>'Fallou','prenom'=>'Diatta','date_e'=>[10,01,2021],'date_rp'=>[0,0,0],'id_adh'=>10,'date_rr'=>[25,01,2021],'titre'=>'Mondial 2022','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>11,'nom'=>'Abou','prenom'=>'jhonshon','date_e'=>[11,01,2021],'date_rp'=>[26,01,2021],'id_adh'=>11,'date_rr'=>[26,01,2021],'titre'=>'Le jugement dernier','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>12,'nom'=>'Papis','prenom'=>'Mendy','date_e'=>[12,01,2021],'date_rp'=>[27,01,2021],'id_adh'=>12,'date_rr'=>[29,01,2021],'titre'=>'Foot foot et foot','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],
        ['id'=>13,'nom'=>'Salomon','prenom'=>'la porte','date_e'=>[13,01,2021],'date_rp'=>[28,01,2021],'id_adh'=>13,'date_rr'=>[20,01,2021],'titre'=>'Le monde sefondre','nbr_l_e'=>1,'etat'=>'En cours','etat1'=>'Retourner','etat2'=>'En retard','etat3'=>'Dans les delais'],

        ];
    return $prets;
}
function find_alls_prets():array{
    $prets=alls_prets();
    $adrtI=[];
    foreach ($prets as $pret) {
        $adrtI[]=[
            'id'=> $pret['id'],
            'nomP'=>$pret['nom']." ".$pret['prenom'],
            'datee'=>$pret['date_e'][0]."/".$pret['date_e'][1]."/".$pret['date_e'][2],
            'daterp'=>$pret['date_rp'][0]."/".$pret['date_rp'][1]."/".$pret['date_rp'][2],
            'daterr'=>$pret['date_rr'][0]."/".$pret['date_rr'][1]."/".$pret['date_rr'][2],
            'id_adrt'=>$pret['id_adh'],
            'titre'=>$pret['titre'],
            'nbre'=>$pret['nbr_l_e'],
        ];
    }
    return $adrtI;
    
}




function find_auteur_by_id(int $id):array|null{
    $auteurs=alls_auteurs();
    foreach ($auteurs as $auteur) {
        if($auteur['id']==$id){
            return $auteur;
        }
    }
    return null;
}
function find_exemplaires_by_id(int $id):array|null{
    $exemplaires=alls_exemplaires();
    foreach ($exemplaires as $exemplaire) {
        if($exemplaire['id']==$id){
            return $exemplaire;
        }
    }
    return null;
}
function find_rayons_by_id(int $id):array|null{
    $rayons=alls_rayons();
    foreach ($rayons as $rayon) {
        if($rayon['id']==$id){
            return $rayon;
        }
    }
    return null;
}


function find_alls_ouvrage():array{
    $ouvrages=alls_ouvrages();
    $ouvrageI=[];
    foreach ($ouvrages as $ouvrage) {
        $auteurs=find_auteur_by_id($ouvrage['id_auteur']);
        $rayons=find_rayons_by_id($ouvrage['id_rayon']);
        $ouvrageI[]=[
            'id'=> $ouvrage['id'],
            'titre'=>$ouvrage['titre'],
            'edition'=>$ouvrage['edition'],
            'auteur'=>$auteurs['prenom']." ".$auteurs['nom'],
            'exemplaire'=>count($ouvrage['id_exemplaire']),
            'rayon'=>$rayons['rayon']
        ];
    }
    return $ouvrageI;
    
}
?>