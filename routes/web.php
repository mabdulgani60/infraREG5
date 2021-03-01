<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/dashboard/denpasar', function () {
    return view('denpasar.denpasar');
});

Route::get('/dashboard/jember', function () {
    return view('jember.jember');
});

Route::get('/dashboard/kediri', function () {
    return view('kediri.kediri');
});

Route::get('/dashboard/kupang', function () {
    return view('kupang.kupang');
});

Route::get('/dashboard/madiun', function () {
    return view('madiun.madiun');
});

Route::get('/dashboard/madura', function () {
    return view('madura.madura');
});

Route::get('/dashboard/malang', function () {
    return view('malang.malang');
});

Route::get('/dashboard/maumere', function () {
    return view('maumere.maumere');
});

Route::get('/dashboard/ntb', function () {
    return view('ntb.ntb');
});

Route::get('/dashboard/pasuruan', function () {
    return view('pasuruan.pasuruan');
});

Route::get('/dashboard/sbs', function () {
    return view('sbs.sbs');
});

Route::get('/dashboard/sbu', function () {
    return view('sbu.sbu');
});

Route::get('/dashboard/sda', function () {
    return view('sidoarjo.sidoarjo');
});

Route::get('/dashboard/sgr', function () {
    return view('singaraja.singaraja');
});

//=========================================================== GANI =============================================================//
// --SBS--
Route::get('/dashboard/MANYAR', function () {
    return view('sbs.manyar');
});

Route::get('/dashboard/GUBENG', function () {
    return view('sbs.gbg');
});

Route::get('/dashboard/DARMO', function () {
    return view('sbs.dmo');
});

Route::get('/dashboard/JAGIR', function () {
    return view('sbs.jgr');
});

Route::get('/dashboard/RUNGKUT', function () {
    return view('sbs.rkt');
});

Route::get('/dashboard/INJOKO', function () {
    return view('sbs.ijk');
});

Route::get('/dashboard/WARU', function () {
    return view('sbs.wru');
});

Route::get('/dashboard/TROPODO', function () {
    return view('sbs.tpo');
});

// --SBU--
Route::get('/dashboard/BRONDONG', function () {
    return view('sbu.bdg');
});

Route::get('/dashboard/BAWEAN', function () {
    return view('sbu.bwn');
});

Route::get('/dashboard/MERGOYOSO', function () {
    return view('sbu.mgo');
});

Route::get('/dashboard/SEDAYU', function () {
    return view('sbu.sdy');
});

Route::get('/dashboard/PONGANGAN', function () {
    return view('sbu.pog');
});

Route::get('/dashboard/GRESIK', function () {
    return view('sbu.gsk');
});

Route::get('/dashboard/DUDUK SAMPEYAN', function () {
    return view('sbu.dds');
});

Route::get('/dashboard/LAMONGAN', function () {
    return view('sbu.lmg');
});

Route::get('/dashboard/SUKODADI', function () {
    return view('sbu.skd');
});

Route::get('/dashboard/BABAD', function () {
    return view('sbu.bba');
});

Route::get('/dashboard/BALONG PANGGANG', function () {
    return view('sbu.bpg');
});

Route::get('/dashboard/LAKARSANTRI', function () {
    return view('sbu.lks');
});

Route::get('/dashboard/KEDAMEAN', function () {
    return view('sbu.kdm');
});

Route::get('/dashboard/CERME', function () {
    return view('sbu.crm');
});

Route::get('/dashboard/KALIANAK', function () {
    return view('sbu.kla');
});

Route::get('/dashboard/KANDANGAN', function () {
    return view('sbu.knn');
});

Route::get('/dashboard/BAMBE', function () {
    return view('sbu.bbe');
});

Route::get('/dashboard/TANDES', function () {
    return view('sbu.tns');
});

Route::get('/dashboard/KAPASAN', function () {
    return view('sbu.kps');
});

Route::get('/dashboard/KEBALEN', function () {
    return view('sbu.kbl');
});

Route::get('/dashboard/KENJERAN', function () {
    return view('sbu.kjr');
});

Route::get('/dashboard/KARANG PILANG', function () {
    return view('sbu.krp');
});

// --SIDOARJO--

Route::get('/dashboard/PLOSO', function () {
    return view('sidoarjo.pos');
});

Route::get('/dashboard/JOMBANG', function () {
    return view('sidoarjo.jom');
});

Route::get('/dashboard/NGORO JOMBANG', function () {
    return view('sidoarjo.nrj');
});

Route::get('/dashboard/MOJOAGUNG', function () {
    return view('sidoarjo.moj');
});

Route::get('/dashboard/MOJOKERTO', function () {
    return view('sidoarjo.mrt');
});

Route::get('/dashboard/MLIRIP', function () {
    return view('sidoarjo.mip');
});

Route::get('/dashboard/MOJOSARI', function () {
    return view('sidoarjo.mjs');
});

Route::get('/dashboard/DLANGGU', function () {
    return view('sidoarjo.dla');
});

Route::get('/dashboard/PACET', function () {
    return view('sidoarjo.pct');
});

Route::get('/dashboard/NGORO INDUSTRI', function () {
    return view('sidoarjo.ngi');
});

Route::get('/dashboard/KRIAN', function () {
    return view('sidoarjo.krn');
});

Route::get('/dashboard/SEPANJANG', function () {
    return view('sidoarjo.spj');
});

Route::get('/dashboard/GEDANGAN', function () {
    return view('sidoarjo.gda');
});

Route::get('/dashboard/SUKODONO', function () {
    return view('sidoarjo.sdn');
});

Route::get('/dashboard/SIDOARJO', function () {
    return view('sidoarjo.sda');
});

Route::get('/dashboard/TULANGAN', function () {
    return view('sidoarjo.tun');
});

Route::get('/dashboard/GEMPOL', function () {
    return view('sidoarjo.gem');
});

Route::get('/dashboard/BEJI', function () {
    return view('sidoarjo.bej');
});

Route::get('/dashboard/PANDAAN', function () {
    return view('sidoarjo.pda');
});

Route::get('/dashboard/PRIGEN', function () {
    return view('sidoarjo.pge');
});

Route::get('/dashboard/PURWOSARI', function () {
    return view('sidoarjo.pws');
});

// --SINGARAJA--

Route::get('/dashboard/GILIMANUK', function () {
    return view('singaraja.gmk');
});

Route::get('/dashboard/NEGARA', function () {
    return view('singaraja.ngr');
});

Route::get('/dashboard/SERIRIT', function () {
    return view('singaraja.srr');
});

Route::get('/dashboard/LOVINA', function () {
    return view('singaraja.lvn');
});

Route::get('/dashboard/SINGARAJA', function () {
    return view('singaraja.sgr');
});

Route::get('/dashboard/PUPUAN', function () {
    return view('singaraja.pua');
});

Route::get('/dashboard/TABANAN', function () {
    return view('singaraja.tbn');
});

Route::get('/dashboard/BATURITI', function () {
    return view('singaraja.btr');
});

Route::get('/dashboard/KINTAMANI', function () {
    return view('singaraja.knt');
});

Route::get('/dashboard/SEMARAPURA', function () {
    return view('singaraja.sma');
});

Route::get('/dashboard/TAMPAK SIRING', function () {
    return view('singaraja.tps');
});

Route::get('/dashboard/BANGLI', function () {
    return view('singaraja.bli');
});

Route::get('/dashboard/UBUD', function () {
    return view('singaraja.ubu');
});

Route::get('/dashboard/GIANYAR', function () {
    return view('singaraja.gin');
});

Route::get('/dashboard/CANDIDASA', function () {
    return view('singaraja.cds');
});

Route::get('/dashboard/AMLAPURA', function () {
    return view('singaraja.apr');
});

// =========================================== ROZIQ =============================================//
Route::get('/dashboard/UBUNG', function () {
    return view('denpasar.ubn');
});

Route::get('/dashboard/SUKAWATIswi', function () {
    return view('denpasar.swi');
});

Route::get('/dashboard/TOHPATI', function () {
    return view('denpasar.top');
});

Route::get('/dashboard/KALIASEM', function () {
    return view('denpasar.klm');
});

Route::get('/dashboard/MONANG-MANING', function () {
    return view('denpasar.mmn');
});

Route::get('/dashboard/SEMINYAK', function () {
    return view('denpasar.smy');
});

Route::get('/dashboard/SANUR', function () {
    return view('denpasar.sau');
});

Route::get('/dashboard/BENOA', function () {
    return view('denpasar.bno');
});

Route::get('/dashboard/KUTA', function () {
    return view('denpasar.kut');
});

Route::get('/dashboard/JIMBARAN', function () {
    return view('denpasar.jbr');
});

Route::get('/dashboard/NUSA DUA', function () {
    return view('denpasar.nsd');
});

Route::get('/dashboard/BESUKI', function () {
    return view('jember.bki');
});

Route::get('/dashboard/KENCONG', function () {
    return view('jember.kno');
});

Route::get('/dashboard/MLANDINGAN', function () {
    return view('jember.mld');
});

Route::get('/dashboard/SITUBONDO', function () {
    return view('jember.sit');
});

Route::get('/dashboard/PRAJEKAN', function () {
    return view('jember.prj');
});

Route::get('/dashboard/ASEMBAGUS', function () {
    return view('jember.asb');
});

Route::get('/dashboard/SUKOSARI', function () {
    return view('jember.sks');
});

Route::get('/dashboard/BONDOWOSO', function () {
    return view('jember.bow');
});

Route::get('/dashboard/WONGSOREJO', function () {
    return view('jember.wso');
});

Route::get('/dashboard/KETAPANG', function () {
    return view('jember.ket');
});

Route::get('/dashboard/BANYUWANGI', function () {
    return view('jember.bwg');
});

Route::get('/dashboard/ROGOJAMPI', function () {
    return view('jember.rgj');
});

Route::get('/dashboard/MUNCARmcr', function () {
    return view('jember.mcr');
});

Route::get('/dashboard/BENCULUK', function () {
    return view('jember.bck');
});

Route::get('/dashboard/GENTENG', function () {
    return view('jember.gen');
});

Route::get('/dashboard/PESANGGARAN', function () {
    return view('jember.psg');
});

Route::get('/dashboard/KEBONSARI JEMBER', function () {
    return view('jember.kbs');
});

Route::get('/dashboard/KALIBARU', function () {
    return view('jember.kbr');
});

Route::get('/dashboard/SEMPOLAN', function () {
    return view('jember.spo');
});

Route::get('/dashboard/KALISAT', function () {
    return view('jember.klt');
});

Route::get('/dashboard/ARJASA JEMBER', function () {
    return view('jember.ajs');
});

Route::get('/dashboard/SUKOWONO', function () {
    return view('jember.skw');
});

Route::get('/dashboard/COKRO JEMBER', function () {
    return view('jember.jer');
});

Route::get('/dashboard/RAMBIPUJI', function () {
    return view('jember.rbp');
});

Route::get('/dashboard/BALUNG', function () {
    return view('jember.bug');
});

Route::get('/dashboard/JENGGAWAH', function () {
    return view('jember.jgw');
});

Route::get('/dashboard/AMBULU', function () {
    return view('jember.abl');
});

Route::get('/dashboard/PUGER', function () {
    return view('jember.pug');
});

Route::get('/dashboard/jember/bno', function () {
    return view('jember.bno');
});

Route::get('/dashboard/TANGGUL', function () {
    return view('jember.tgu');
});

Route::get('/dashboard/GONDANG', function () {
    return view('kediri.gon');
});

Route::get('/dashboard/NGANJUK', function () {
    return view('kediri.njk');
});

Route::get('/dashboard/KERTOSONO', function () {
    return view('kediri.kts');
});

Route::get('/dashboard/WARUJAYENG', function () {
    return view('kediri.wrj');
});

Route::get('/dashboard/PAPAR', function () {
    return view('kediri.ppr');
});

Route::get('/dashboard/PRAMBON', function () {
    return view('kediri.prb');
});

Route::get('/dashboard/PARE', function () {
    return view('kediri.pae');
});

Route::get('/dashboard/KANDANGAN KEDIRI', function () {
    return view('kediri.kaa');
});

Route::get('/dashboard/MOJOROTO', function () {
    return view('kediri.mjt');
});

Route::get('/dashboard/KEDIRI', function () {
    return view('kediri.kdi');
});

Route::get('/dashboard/GURAH', function () {
    return view('kediri.gur');
});

Route::get('/dashboard/WATES', function () {
    return view('kediri.wat');
});

Route::get('/dashboard/NGADILUWIH', function () {
    return view('kediri.ndl');
});

Route::get('/dashboard/SAMBI', function () {
    return view('kediri.sbi');
});

Route::get('/dashboard/SRENGAT', function () {
    return view('kediri.snt');
});

Route::get('/dashboard/BLITAR', function () {
    return view('kediri.blr');
});

Route::get('/dashboard/PANATARAN', function () {
    return view('kediri.pan');
});

Route::get('/dashboard/LODOYO', function () {
    return view('kediri.ldy');
});

Route::get('/dashboard/WLINGI', function () {
    return view('kediri.wgi');
});

Route::get('/dashboard/KESAMBEN', function () {
    return view('kediri.kbn');
});

Route::get('/dashboard/NGUNUT', function () {
    return view('kediri.ngu');
});

Route::get('/dashboard/TULUNGAGUNG', function () {
    return view('kediri.tul');
});

Route::get('/dashboard/CAMPUR DARAT', function () {
    return view('kediri.cat');
});

Route::get('/dashboard/DURENAN', function () {
    return view('kediri.drn');
});

Route::get('/dashboard/TRENGGALEK', function () {
    return view('kediri.tre');
});

Route::get('/dashboard/PRIGI', function () {
    return view('kediri.pri');
});

Route::get('/dashboard/SEBA', function () {
    return view('kupang.seb');
});

Route::get('/dashboard/TENAU', function () {
    return view('kupang.tna');
});

Route::get('/dashboard/KUPANG', function () {
    return view('kupang.kpn');
});

Route::get('/dashboard/OESAPA', function () {
    return view('kupang.osp');
});

Route::get('/dashboard/SOE', function () {
    return view('kupang.soe');
});

Route::get('/dashboard/NIKI NIKI', function () {
    return view('kupang.nkn');
});

Route::get('/dashboard/KEFAMENANU', function () {
    return view('kupang.kef');
});

Route::get('/dashboard/ATAMBUA', function () {
    return view('kupang.atb');
});

Route::get('/dashboard/BANCAR', function () {
    return view('madiun.bcr');
});

Route::get('/dashboard/JATIROGO', function () {
    return view('madiun.jtr');
});

Route::get('/dashboard/KERAK', function () {
    return view('madiun.krk');
});

Route::get('/dashboard/MERAKURAK', function () {
    return view('madiun.mrr');
});

Route::get('/dashboard/TUBAN', function () {
    return view('madiun.tnz');
});

Route::get('/dashboard/RENGEL', function () {
    return view('madiun.rgl');
});

Route::get('/dashboard/KALITIDU', function () {
    return view('madiun.kdu');
});

Route::get('/dashboard/BOJONEGORO', function () {
    return view('madiun.bjn');
});

Route::get('/dashboard/SUMBERREJO', function () {
    return view('madiun.smj');
});

Route::get('/dashboard/NGAWI', function () {
    return view('madiun.nwi');
});

Route::get('/dashboard/WALIKUKUN', function () {
    return view('madiun.wku');
});

Route::get('/dashboard/JOGOROGO', function () {
    return view('madiun.jgo');
});

Route::get('/dashboard/KARANGJATI', function () {
    return view('madiun.krj');
});

Route::get('/dashboard/CARUBAN', function () {
    return view('madiun.crb');
});

Route::get('/dashboard/MAOSPATI', function () {
    return view('madiun.msp');
});

Route::get('/dashboard/STO MADIUN', function () {
    return view('madiun.mnz');
});

Route::get('/dashboard/SARANGAN', function () {
    return view('madiun.sar');
});

Route::get('/dashboard/MAGETAN', function () {
    return view('madiun.mgt');
});

Route::get('/dashboard/GORANGGARENG', function () {
    return view('madiun.ggr');
});

Route::get('/dashboard/UTERAN', function () {
    return view('madiun.utr');
});

Route::get('/dashboard/JENANGAN', function () {
    return view('madiun.jen');
});

Route::get('/dashboard/SUMOROTO', function () {
    return view('madiun.smo');
});

Route::get('/dashboard/PONOROGO', function () {
    return view('madiun.pon');
});

Route::get('/dashboard/PULUNG', function () {
    return view('madiun.plg');
});

Route::get('/dashboard/SAMBIT', function () {
    return view('madiun.sat');
});

Route::get('/dashboard/SLAHUNG', function () {
    return view('madiun.slh');
});

Route::get('/dashboard/PUNUNG', function () {
    return view('madiun.png');
});

Route::get('/dashboard/PACITAN', function () {
    return view('madiun.pnz');
});

Route::get('/dashboard/LOGOR', function () {
    return view('madiun.log');
});

Route::get('/dashboard/AROSBAYA', function () {
    return view('madura.arb');
});

Route::get('/dashboard/BANGKALAN', function () {
    return view('madura.bkl');
});

Route::get('/dashboard/KAMAL', function () {
    return view('madura.kml');
});

Route::get('/dashboard/TANJUNG BUMI', function () {
    return view('madura.tbu');
});

Route::get('/dashboard/KETAPANG2', function () {
    return view('madura.kpp');
});

Route::get('/dashboard/OMBEN', function () {
    return view('madura.omb');
});

Route::get('/dashboard/BLEGA', function () {
    return view('madura.blg');
});

Route::get('/dashboard/SAMPANG', function () {
    return view('madura.spg');
});

Route::get('/dashboard/PAMEKASAN', function () {
    return view('madura.pme');
});

Route::get('/dashboard/WARU3', function () {
    return view('madura.wrp');
});

Route::get('/dashboard/MASALEMBO', function () {
    return view('madura.mlb');
});

Route::get('/dashboard/AMBUNTEN PM', function () {
    return view('madura.abt');
});

Route::get('/dashboard/PRAGAAN', function () {
    return view('madura.prg');
});

Route::get('/dashboard/SUMENEP', function () {
    return view('madura.smp');
});

Route::get('/dashboard/BATANG BATANG', function () {
    return view('madura.bab');
});

Route::get('/dashboard/SAPUDI PM', function () {
    return view('madura.spd');
});

Route::get('/dashboard/KANGEAN', function () {
    return view('madura.kgn');
});

Route::get('/dashboard/SAPEKEN PM', function () {
    return view('madura.spk');
});

//=========================================================== BILAL =============================================================//
Route::get('/dashboard/AMPEL GADING', function () {
    return view('malang.apg');
});
Route::get('/dashboard/BLIMBING', function () {
    return view('malang.blb');
});
Route::get('/dashboard/BANTUR', function () {
    return view('malang.bnr');
});
Route::get('/dashboard/BURING', function () {
    return view('malang.brg');
});
Route::get('/dashboard/BATU', function () {
    return view('malang.btu');
});
Route::get('/dashboard/DONOMULYO', function () {
    return view('malang.dno');
});
Route::get('/dashboard/DAMPIT', function () {
    return view('malang.dpt');
});
Route::get('/dashboard/GADANG', function () {
    return view('malang.gdg');
});
Route::get('/dashboard/GONDANGLEGI', function () {
    return view('malang.gdi');
});
Route::get('/dashboard/GUNUNG KAWI', function () {
    return view('malang.gkw');
});
Route::get('/dashboard/KEPANJEN', function () {
    return view('malang.kep');
});
Route::get('/dashboard/KLOJEN', function () {
    return view('malang.klj');
});
Route::get('/dashboard/KARANG PLOSO', function () {
    return view('malang.kpo');
});
Route::get('/dashboard/LAWANG', function () {
    return view('malang.lwg');
});
Route::get('/dashboard/MALANG', function () {
    return view('malang.mlg');
});
Route::get('/dashboard/NGANTANG', function () {
    return view('malang.ntg');
});
Route::get('/dashboard/PAGAK', function () {
    return view('malang.pgk');
});
Route::get('/dashboard/PAKIS', function () {
    return view('malang.pks');
});
Route::get('/dashboard/SUMBERMANJING', function () {
    return view('malang.sbm');
});
Route::get('/dashboard/SUMBER PUCUNG', function () {
    return view('malang.sbp');
});
Route::get('/dashboard/SINGOSARI', function () {
    return view('malang.sgs');
});
Route::get('/dashboard/SAWOJAJAR', function () {
    return view('malang.swj');
});
Route::get('/dashboard/TUMPANG', function () {
    return view('malang.tmp');
});
Route::get('/dashboard/TUREN', function () {
    return view('malang.tur');
});


Route::get('/dashboard/BAJAWA', function () {
    return view('maumere.bjw');
});
Route::get('/dashboard/ENDE', function () {
    return view('maumere.end');
});
Route::get('/dashboard/LABUHANBAJO', function () {
    return view('maumere.lbo');
});
Route::get('/dashboard/LARANTUKA', function () {
    return view('maumere.lrt');
});
Route::get('/dashboard/MAUMERE', function () {
    return view('maumere.mmr');
});
Route::get('/dashboard/RUTENG', function () {
    return view('maumere.rte');
});
Route::get('/dashboard/WAINGAPI', function () {
    return view('maumere.wgp');
});


Route::get('/dashboard/ALAS', function () {
    return view('ntb.ala');
});
Route::get('/dashboard/BIMA', function () {
    return view('ntb.bim');
});
Route::get('/dashboard/DOMPU', function () {
    return view('ntb.dmp');
});
Route::get('/dashboard/GERUNG', function () {
    return view('ntb.ger');
});
Route::get('/dashboard/MASBAGIK', function () {
    return view('ntb.mbg');
});
Route::get('/dashboard/MALUK', function () {
    return view('ntb.mlk');
});
Route::get('/dashboard/MATARAM', function () {
    return view('ntb.mtr');
});
Route::get('/dashboard/PRAYA', function () {
    return view('ntb.pry');
});
Route::get('/dashboard/SUMBAWA', function () {
    return view('ntb.sbw');
});
Route::get('/dashboard/SELONG', function () {
    return view('ntb.sel');
});
Route::get('/dashboard/SENGGIGI', function () {
    return view('ntb.sgg');
});
Route::get('/dashboard/SWETA', function () {
    return view('ntb.swe');
});
Route::get('/dashboard/TENTE', function () {
    return view('ntb.tet');
});
Route::get('/dashboard/TALIWANG', function () {
    return view('ntb.tlw');
});


Route::get('/dashboard/BANGIL', function () {
    return view('pasuruan.bnl');
});
Route::get('/dashboard/GONDANG WETAN', function () {
    return view('pasuruan.gdw');
});
Route::get('/dashboard/GENDING', function () {
    return view('pasuruan.gnd');
});
Route::get('/dashboard/GRATI', function () {
    return view('pasuruan.gra');
});
Route::get('/dashboard/JATIROTO', function () {
    return view('pasuruan.jto');
});
Route::get('/dashboard/KLAKAH', function () {
    return view('pasuruan.kkh');
});
Route::get('/dashboard/KRAKSAAN', function () {
    return view('pasuruan.krz');
});
Route::get('/dashboard/LECES', function () {
    return view('pasuruan.lce');
});
Route::get('/dashboard/LUMAJANG', function () {
    return view('pasuruan.lmj');
});
Route::get('/dashboard/NONGKOJAJAR', function () {
    return view('pasuruan.nja');
});
Route::get('/dashboard/PROBOLINGGO', function () {
    return view('pasuruan.pbl');
});
Route::get('/dashboard/PASIRIAN', function () {
    return view('pasuruan.pii');
});
Route::get('/dashboard/PASURUAN', function () {
    return view('pasuruan.psn');
});
Route::get('/dashboard/PAITON', function () {
    return view('pasuruan.ptn');
});
Route::get('/dashboard/SENDURO', function () {
    return view('pasuruan.sdo');
});
Route::get('/dashboard/SUKAPURA', function () {
    return view('pasuruan.skp');
});
Route::get('/dashboard/TONGAS', function () {
    return view('pasuruan.tgs');
});
Route::get('/dashboard/TEMPEH', function () {
    return view('pasuruan.tph');
});
Route::get('/dashboard/YOSOWILANGUN', function () {
    return view('pasuruan.ysn');
});


Route::get('/dashboard/data/show/{id}', 'DataController@showdata');
Route::get('/dashboard/data/hapus/{id}','DataController@hapusdata');
Route::get('/dashboard/data/edit/{id}','DataController@editdata');

//=========================================================== GANI =============================================================//
//================================================== SBS ================================================//
// -- INJOKO --
Route::get('/dashboard/INJOKO/PLN',['as' => 'ijk_pln', 'uses' =>'DataController@indexijkpln']);
Route::get('/dashboard/INJOKO/PLN/tambah','DataController@tambahijkpln');
Route::post('/dashboard/INJOKO/PLN/store','DataController@storeijkpln');
Route::post('/dashboard/INJOKO/PLN/update','DataController@updateijkpln');

Route::get('/dashboard/INJOKO/AC',['as' => 'ijk_ac', 'uses' =>'DataController@indexijkac']);
Route::get('/dashboard/INJOKO/AC/tambah','DataController@tambahijkac');
Route::post('/dashboard/INJOKO/AC/store','DataController@storeijkac');
Route::post('/dashboard/INJOKO/AC/update','DataController@updateijkac');

Route::get('/dashboard/INJOKO/GENERATOR',['as' => 'ijk_generator', 'uses' =>'DataController@indexijkgenerator']);
Route::get('/dashboard/INJOKO/GENERATOR/tambah','DataController@tambahijkgenerator');
Route::post('/dashboard/INJOKO/GENERATOR/store','DataController@storeijkgenerator');
Route::post('/dashboard/INJOKO/GENERATOR/update','DataController@updateijkgenerator');

Route::get('/dashboard/INJOKO/RECTIFIER',['as' => 'ijk_rectifier', 'uses' =>'DataController@indexijkrectifier']);
Route::get('/dashboard/INJOKO/RECTIFIER/tambah','DataController@tambahijkrectifier');
Route::post('/dashboard/INJOKO/RECTIFIER/store','DataController@storeijkrectifier');
Route::post('/dashboard/INJOKO/RECTIFIER/update','DataController@updateijkrectifier');

Route::get('/dashboard/INJOKO/BATTERE',['as' => 'ijk_battere', 'uses' =>'DataController@indexijkbattere']);
Route::get('/dashboard/INJOKO/BATTERE/tambah','DataController@tambahijkbattere');
Route::post('/dashboard/INJOKO/BATTERE/store','DataController@storeijkbattere');
Route::post('/dashboard/INJOKO/BATTERE/update','DataController@updateijkbattere');

// -- TROPODO --
Route::get('/dashboard/TROPODO/PLN',['as' => 'tpo_pln', 'uses' =>'DataController@indextpopln']);
Route::get('/dashboard/TROPODO/PLN/tambah','DataController@tambahtpopln');
Route::post('/dashboard/TROPODO/PLN/store','DataController@storetpopln');
Route::post('/dashboard/TROPODO/PLN/update','DataController@updatetpopln');

Route::get('/dashboard/TROPODO/AC',['as' => 'tpo_ac', 'uses' =>'DataController@indextpoac']);
Route::get('/dashboard/TROPODO/AC/tambah','DataController@tambahtpoac');
Route::post('/dashboard/TROPODO/AC/store','DataController@storetpoac');
Route::post('/dashboard/TROPODO/AC/update','DataController@updatetpoac');

Route::get('/dashboard/TROPODO/GENERATOR',['as' => 'tpo_generator', 'uses' =>'DataController@indextpogenerator']);
Route::get('/dashboard/TROPODO/GENERATOR/tambah','DataController@tambahtpogenerator');
Route::post('/dashboard/TROPODO/GENERATOR/store','DataController@storetpogenerator');
Route::post('/dashboard/TROPODO/GENERATOR/update','DataController@updatetpogenerator');

Route::get('/dashboard/TROPODO/RECTIFIER',['as' => 'tpo_rectifier', 'uses' =>'DataController@indextporectifier']);
Route::get('/dashboard/TROPODO/RECTIFIER/tambah','DataController@tambahtporectifier');
Route::post('/dashboard/TROPODO/RECTIFIER/store','DataController@storetporectifier');
Route::post('/dashboard/TROPODO/RECTIFIER/update','DataController@updatetporectifier');

Route::get('/dashboard/TROPODO/BATTERE',['as' => 'tpo_battere', 'uses' =>'DataController@indextpobattere']);
Route::get('/dashboard/TROPODO/BATTERE/tambah','DataController@tambahtpobattere');
Route::post('/dashboard/TROPODO/BATTERE/store','DataController@storetpobattere');
Route::post('/dashboard/TROPODO/BATTERE/update','DataController@updatetpobattere');

// -- DARMO --
Route::get('/dashboard/DARMO/PLN',['as' => 'dmo_pln', 'uses' =>'DataController@indexdmopln']);
Route::get('/dashboard/DARMO/PLN/tambah','DataController@tambahdmopln');
Route::post('/dashboard/DARMO/PLN/store','DataController@storedmopln');
Route::post('/dashboard/DARMO/PLN/update','DataController@updatedmopln');

Route::get('/dashboard/DARMO/AC',['as' => 'dmo_ac', 'uses' =>'DataController@indexdmoac']);
Route::get('/dashboard/DARMO/AC/tambah','DataController@tambahdmoac');
Route::post('/dashboard/DARMO/AC/store','DataController@storedmoac');
Route::post('/dashboard/DARMO/AC/update','DataController@updatedmoac');

Route::get('/dashboard/DARMO/GENERATOR',['as' => 'dmo_generator', 'uses' =>'DataController@indexdmogenerator']);
Route::get('/dashboard/DARMO/GENERATOR/tambah','DataController@tambahdmogenerator');
Route::post('/dashboard/DARMO/GENERATOR/store','DataController@storedmogenerator');
Route::post('/dashboard/DARMO/GENERATOR/update','DataController@updatedmogenerator');

Route::get('/dashboard/DARMO/RECTIFIER',['as' => 'dmo_rectifier', 'uses' =>'DataController@indexdmorectifier']);
Route::get('/dashboard/DARMO/RECTIFIER/tambah','DataController@tambahdmorectifier');
Route::post('/dashboard/DARMO/RECTIFIER/store','DataController@storedmorectifier');
Route::post('/dashboard/DARMO/RECTIFIER/update','DataController@updatedmorectifier');

Route::get('/dashboard/DARMO/BATTERE',['as' => 'dmo_battere', 'uses' =>'DataController@indexdmobattere']);
Route::get('/dashboard/DARMO/BATTERE/tambah','DataController@tambahdmobattere');
Route::post('/dashboard/DARMO/BATTERE/store','DataController@storedmobattere');
Route::post('/dashboard/DARMO/BATTERE/update','DataController@updatedmobattere');

// -- GUBENG --
Route::get('/dashboard/GUBENG/PLN',['as' => 'gbg_pln', 'uses' =>'DataController@indexgbgpln']);
Route::get('/dashboard/GUBENG/PLN/tambah','DataController@tambahgbgpln');
Route::post('/dashboard/GUBENG/PLN/store','DataController@storegbgpln');
Route::post('/dashboard/GUBENG/PLN/update','DataController@updategbgpln');

Route::get('/dashboard/GUBENG/AC',['as' => 'gbg_ac', 'uses' =>'DataController@indexgbgac']);
Route::get('/dashboard/GUBENG/AC/tambah','DataController@tambahgbgac');
Route::post('/dashboard/GUBENG/AC/store','DataController@storegbgac');
Route::post('/dashboard/GUBENG/AC/update','DataController@updategbgac');

Route::get('/dashboard/GUBENG/GENERATOR',['as' => 'gbg_generator', 'uses' =>'DataController@indexgbggenerator']);
Route::get('/dashboard/GUBENG/GENERATOR/tambah','DataController@tambahgbggenerator');
Route::post('/dashboard/GUBENG/GENERATOR/store','DataController@storegbggenerator');
Route::post('/dashboard/GUBENG/GENERATOR/update','DataController@updategbggenerator');

Route::get('/dashboard/GUBENG/RECTIFIER',['as' => 'gbg_rectifier', 'uses' =>'DataController@indexgbgrectifier']);
Route::get('/dashboard/GUBENG/RECTIFIER/tambah','DataController@tambahgbgrectifier');
Route::post('/dashboard/GUBENG/RECTIFIER/store','DataController@storegbgrectifier');
Route::post('/dashboard/GUBENG/RECTIFIER/update','DataController@updategbgrectifier');

Route::get('/dashboard/GUBENG/BATTERE',['as' => 'gbg_battere', 'uses' =>'DataController@indexgbgbattere']);
Route::get('/dashboard/GUBENG/BATTERE/tambah','DataController@tambahgbgbattere');
Route::post('/dashboard/GUBENG/BATTERE/store','DataController@storegbgbattere');
Route::post('/dashboard/GUBENG/BATTERE/update','DataController@updategbgbattere');

// -- JAGIR --
Route::get('/dashboard/JAGIR/PLN',['as' => 'jgr_pln', 'uses' =>'DataController@indexjgrpln']);
Route::get('/dashboard/JAGIR/PLN/tambah','DataController@tambahjgrpln');
Route::post('/dashboard/JAGIR/PLN/store','DataController@storejgrpln');
Route::post('/dashboard/JAGIR/PLN/update','DataController@updatejgrpln');

Route::get('/dashboard/JAGIR/AC',['as' => 'jgr_ac', 'uses' =>'DataController@indexjgrac']);
Route::get('/dashboard/JAGIR/AC/tambah','DataController@tambahjgrac');
Route::post('/dashboard/JAGIR/AC/store','DataController@storejgrac');
Route::post('/dashboard/JAGIR/AC/update','DataController@updatejgrac');

Route::get('/dashboard/JAGIR/GENERATOR',['as' => 'jgr_generator', 'uses' =>'DataController@indexjgrgenerator']);
Route::get('/dashboard/JAGIR/GENERATOR/tambah','DataController@tambahjgrgenerator');
Route::post('/dashboard/JAGIR/GENERATOR/store','DataController@storejgrgenerator');
Route::post('/dashboard/JAGIR/GENERATOR/update','DataController@updatejgrgenerator');

Route::get('/dashboard/JAGIR/RECTIFIER',['as' => 'jgr_rectifier', 'uses' =>'DataController@indexjgrrectifier']);
Route::get('/dashboard/JAGIR/RECTIFIER/tambah','DataController@tambahjgrrectifier');
Route::post('/dashboard/JAGIR/RECTIFIER/store','DataController@storejgrrectifier');
Route::post('/dashboard/JAGIR/RECTIFIER/update','DataController@updatejgrrectifier');

Route::get('/dashboard/JAGIR/BATTERE',['as' => 'jgr_battere', 'uses' =>'DataController@indexjgrbattere']);
Route::get('/dashboard/JAGIR/BATTERE/tambah','DataController@tambahjgrbattere');
Route::post('/dashboard/JAGIR/BATTERE/store','DataController@storejgrbattere');
Route::post('/dashboard/JAGIR/BATTERE/update','DataController@updatejgrbattere');

// -- MANYAR --
Route::get('/dashboard/MANYAR/PLN',['as' => 'manyar_pln', 'uses' =>'DataController@indexmanyarpln']);
Route::get('/dashboard/MANYAR/PLN/tambah','DataController@tambahmanyarpln');
Route::post('/dashboard/MANYAR/PLN/store','DataController@storemanyarpln');
Route::post('/dashboard/MANYAR/PLN/update','DataController@updatemanyarpln');

Route::get('/dashboard/MANYAR/AC',['as' => 'manyar_ac', 'uses' =>'DataController@indexmanyarac']);
Route::get('/dashboard/MANYAR/AC/tambah','DataController@tambahmanyarac');
Route::post('/dashboard/MANYAR/AC/store','DataController@storemanyarac');
Route::post('/dashboard/MANYAR/AC/update','DataController@updatemanyarac');

Route::get('/dashboard/MANYAR/GENERATOR',['as' => 'manyar_generator', 'uses' =>'DataController@indexmanyargenerator']);
Route::get('/dashboard/MANYAR/GENERATOR/tambah','DataController@tambahmanyargenerator');
Route::post('/dashboard/MANYAR/GENERATOR/store','DataController@storemanyargenerator');
Route::post('/dashboard/MANYAR/GENERATOR/update','DataController@updatemanyargenerator');

Route::get('/dashboard/MANYAR/RECTIFIER',['as' => 'manyar_rectifier', 'uses' =>'DataController@indexmanyarrectifier']);
Route::get('/dashboard/MANYAR/RECTIFIER/tambah','DataController@tambahmanyarrectifier');
Route::post('/dashboard/MANYAR/RECTIFIER/store','DataController@storemanyarrectifier');
Route::post('/dashboard/MANYAR/RECTIFIER/update','DataController@updatemanyarrectifier');

Route::get('/dashboard/MANYAR/BATTERE',['as' => 'manyar_battere', 'uses' =>'DataController@indexmanyarbattere']);
Route::get('/dashboard/MANYAR/BATTERE/tambah','DataController@tambahmanyarbattere');
Route::post('/dashboard/MANYAR/BATTERE/store','DataController@storemanyarbattere');
Route::post('/dashboard/MANYAR/BATTERE/update','DataController@updatemanyarbattere');

// -- RUNGKUT --
Route::get('/dashboard/RUNGKUT/PLN',['as' => 'rkt_pln', 'uses' =>'DataController@indexrktpln']);
Route::get('/dashboard/RUNGKUT/PLN/tambah','DataController@tambahrktpln');
Route::post('/dashboard/RUNGKUT/PLN/store','DataController@storerktpln');
Route::post('/dashboard/RUNGKUT/PLN/update','DataController@updaterktpln');

Route::get('/dashboard/RUNGKUT/AC',['as' => 'rkt_ac', 'uses' =>'DataController@indexrktac']);
Route::get('/dashboard/RUNGKUT/AC/tambah','DataController@tambahrktac');
Route::post('/dashboard/RUNGKUT/AC/store','DataController@storerktac');
Route::post('/dashboard/RUNGKUT/AC/update','DataController@updaterktac');

Route::get('/dashboard/RUNGKUT/GENERATOR',['as' => 'rkt_generator', 'uses' =>'DataController@indexrktgenerator']);
Route::get('/dashboard/RUNGKUT/GENERATOR/tambah','DataController@tambahrktgenerator');
Route::post('/dashboard/RUNGKUT/GENERATOR/store','DataController@storerktgenerator');
Route::post('/dashboard/RUNGKUT/GENERATOR/update','DataController@updaterktgenerator');

Route::get('/dashboard/RUNGKUT/RECTIFIER',['as' => 'rkt_rectifier', 'uses' =>'DataController@indexrktrectifier']);
Route::get('/dashboard/RUNGKUT/RECTIFIER/tambah','DataController@tambahrktrectifier');
Route::post('/dashboard/RUNGKUT/RECTIFIER/store','DataController@storerktrectifier');
Route::post('/dashboard/RUNGKUT/RECTIFIER/update','DataController@updaterktrectifier');

Route::get('/dashboard/RUNGKUT/BATTERE',['as' => 'rkt_battere', 'uses' =>'DataController@indexrktbattere']);
Route::get('/dashboard/RUNGKUT/BATTERE/tambah','DataController@tambahrktbattere');
Route::post('/dashboard/RUNGKUT/BATTERE/store','DataController@storerktbattere');
Route::post('/dashboard/RUNGKUT/BATTERE/update','DataController@updaterktbattere');

// -- WARU --
Route::get('/dashboard/WARU/PLN',['as' => 'wru_pln', 'uses' =>'DataController@indexwrupln']);
Route::get('/dashboard/WARU/PLN/tambah','DataController@tambahwrupln');
Route::post('/dashboard/WARU/PLN/store','DataController@storewrupln');
Route::post('/dashboard/WARU/PLN/update','DataController@updatewrupln');

Route::get('/dashboard/WARU/AC',['as' => 'wru_ac', 'uses' =>'DataController@indexwruac']);
Route::get('/dashboard/WARU/AC/tambah','DataController@tambahwruac');
Route::post('/dashboard/WARU/AC/store','DataController@storewruac');
Route::post('/dashboard/WARU/AC/update','DataController@updatewruac');

Route::get('/dashboard/WARU/GENERATOR',['as' => 'wru_generator', 'uses' =>'DataController@indexwrugenerator']);
Route::get('/dashboard/WARU/GENERATOR/tambah','DataController@tambahwrugenerator');
Route::post('/dashboard/WARU/GENERATOR/store','DataController@storewrugenerator');
Route::post('/dashboard/WARU/GENERATOR/update','DataController@updatewrugenerator');

Route::get('/dashboard/WARU/RECTIFIER',['as' => 'wru_rectifier', 'uses' =>'DataController@indexwrurectifier']);
Route::get('/dashboard/WARU/RECTIFIER/tambah','DataController@tambahwrurectifier');
Route::post('/dashboard/WARU/RECTIFIER/store','DataController@storewrurectifier');
Route::post('/dashboard/WARU/RECTIFIER/update','DataController@updatewrurectifier');

Route::get('/dashboard/WARU/BATTERE',['as' => 'wru_battere', 'uses' =>'DataController@indexwrubattere']);
Route::get('/dashboard/WARU/BATTERE/tambah','DataController@tambahwrubattere');
Route::post('/dashboard/WARU/BATTERE/store','DataController@storewrubattere');
Route::post('/dashboard/WARU/BATTERE/update','DataController@updatewrubattere');

//================================================== SBU ================================================//
// -- BABAD --
Route::get('/dashboard/BABAD/PLN',['as' => 'bba_pln', 'uses' =>'DataController@indexbbapln']);
Route::get('/dashboard/BABAD/PLN/tambah','DataController@tambahbbapln');
Route::post('/dashboard/BABAD/PLN/store','DataController@storebbapln');
Route::post('/dashboard/BABAD/PLN/update','DataController@updatebbapln');

Route::get('/dashboard/BABAD/AC',['as' => 'bba_ac', 'uses' =>'DataController@indexbbaac']);
Route::get('/dashboard/BABAD/AC/tambah','DataController@tambahbbaac');
Route::post('/dashboard/BABAD/AC/store','DataController@storebbaac');
Route::post('/dashboard/BABAD/AC/update','DataController@updatebbaac');

Route::get('/dashboard/BABAD/GENERATOR',['as' => 'bba_generator', 'uses' =>'DataController@indexbbagenerator']);
Route::get('/dashboard/BABAD/GENERATOR/tambah','DataController@tambahbbagenerator');
Route::post('/dashboard/BABAD/GENERATOR/store','DataController@storebbagenerator');
Route::post('/dashboard/BABAD/GENERATOR/update','DataController@updatebbagenerator');

Route::get('/dashboard/BABAD/RECTIFIER',['as' => 'bba_rectifier', 'uses' =>'DataController@indexbbarectifier']);
Route::get('/dashboard/BABAD/RECTIFIER/tambah','DataController@tambahbbarectifier');
Route::post('/dashboard/BABAD/RECTIFIER/store','DataController@storebbarectifier');
Route::post('/dashboard/BABAD/RECTIFIER/update','DataController@updatebbarectifier');

Route::get('/dashboard/BABAD/BATTERE',['as' => 'bba_battere', 'uses' =>'DataController@indexbbabattere']);
Route::get('/dashboard/BABAD/BATTERE/tambah','DataController@tambahbbabattere');
Route::post('/dashboard/BABAD/BATTERE/store','DataController@storebbabattere');
Route::post('/dashboard/BABAD/BATTERE/update','DataController@updatebbabattere');

// -- BAMBE --
Route::get('/dashboard/BAMBE/PLN',['as' => 'bbe_pln', 'uses' =>'DataController@indexbbepln']);
Route::get('/dashboard/BAMBE/PLN/tambah','DataController@tambahbbepln');
Route::post('/dashboard/BAMBE/PLN/store','DataController@storebbepln');
Route::post('/dashboard/BAMBE/PLN/update','DataController@updatebbepln');

Route::get('/dashboard/BAMBE/AC',['as' => 'bbe_ac', 'uses' =>'DataController@indexbbeac']);
Route::get('/dashboard/BAMBE/AC/tambah','DataController@tambahbbeac');
Route::post('/dashboard/BAMBE/AC/store','DataController@storebbeac');
Route::post('/dashboard/BAMBE/AC/update','DataController@updatebbeac');

Route::get('/dashboard/BAMBE/GENERATOR',['as' => 'bbe_generator', 'uses' =>'DataController@indexbbegenerator']);
Route::get('/dashboard/BAMBE/GENERATOR/tambah','DataController@tambahbbegenerator');
Route::post('/dashboard/BAMBE/GENERATOR/store','DataController@storebbegenerator');
Route::post('/dashboard/BAMBE/GENERATOR/update','DataController@updatebbegenerator');

Route::get('/dashboard/BAMBE/RECTIFIER',['as' => 'bbe_rectifier', 'uses' =>'DataController@indexbberectifier']);
Route::get('/dashboard/BAMBE/RECTIFIER/tambah','DataController@tambahbberectifier');
Route::post('/dashboard/BAMBE/RECTIFIER/store','DataController@storebberectifier');
Route::post('/dashboard/BAMBE/RECTIFIER/update','DataController@updatebberectifier');

Route::get('/dashboard/BAMBE/BATTERE',['as' => 'bbe_battere', 'uses' =>'DataController@indexbbebattere']);
Route::get('/dashboard/BAMBE/BATTERE/tambah','DataController@tambahbbebattere');
Route::post('/dashboard/BAMBE/BATTERE/store','DataController@storebbebattere');
Route::post('/dashboard/BAMBE/BATTERE/update','DataController@updatebbebattere');

// -- BRONDONG --
Route::get('/dashboard/BRONDONG/PLN',['as' => 'bdg_pln', 'uses' =>'DataController@indexbdgpln']);
Route::get('/dashboard/BRONDONG/PLN/tambah','DataController@tambahbdgpln');
Route::post('/dashboard/BRONDONG/PLN/store','DataController@storebdgpln');
Route::post('/dashboard/BRONDONG/PLN/update','DataController@updatebdgpln');

Route::get('/dashboard/BRONDONG/AC',['as' => 'bdg_ac', 'uses' =>'DataController@indexbdgac']);
Route::get('/dashboard/BRONDONG/AC/tambah','DataController@tambahbdgac');
Route::post('/dashboard/BRONDONG/AC/store','DataController@storebdgac');
Route::post('/dashboard/BRONDONG/AC/update','DataController@updatebdgac');

Route::get('/dashboard/BRONDONG/GENERATOR',['as' => 'bdg_generator', 'uses' =>'DataController@indexbdggenerator']);
Route::get('/dashboard/BRONDONG/GENERATOR/tambah','DataController@tambahbdggenerator');
Route::post('/dashboard/BRONDONG/GENERATOR/store','DataController@storebdggenerator');
Route::post('/dashboard/BRONDONG/GENERATOR/update','DataController@updatebdggenerator');

Route::get('/dashboard/BRONDONG/RECTIFIER',['as' => 'bdg_rectifier', 'uses' =>'DataController@indexbdgrectifier']);
Route::get('/dashboard/BRONDONG/RECTIFIER/tambah','DataController@tambahbdgrectifier');
Route::post('/dashboard/BRONDONG/RECTIFIER/store','DataController@storebdgrectifier');
Route::post('/dashboard/BRONDONG/RECTIFIER/update','DataController@updatebdgrectifier');

Route::get('/dashboard/BRONDONG/BATTERE',['as' => 'bdg_battere', 'uses' =>'DataController@indexbdgbattere']);
Route::get('/dashboard/BRONDONG/BATTERE/tambah','DataController@tambahbdgbattere');
Route::post('/dashboard/BRONDONG/BATTERE/store','DataController@storebdgbattere');
Route::post('/dashboard/BRONDONG/BATTERE/update','DataController@updatebdgbattere');

// -- BALONG PANGGANG --
Route::get('/dashboard/BALONG PANGGANG/PLN',['as' => 'bpg_pln', 'uses' =>'DataController@indexbpgpln']);
Route::get('/dashboard/BALONG PANGGANG/PLN/tambah','DataController@tambahbpgpln');
Route::post('/dashboard/BALONG PANGGANG/PLN/store','DataController@storebpgpln');
Route::post('/dashboard/BALONG PANGGANG/PLN/update','DataController@updatebpgpln');

Route::get('/dashboard/BALONG PANGGANG/AC',['as' => 'bpg_ac', 'uses' =>'DataController@indexbpgac']);
Route::get('/dashboard/BALONG PANGGANG/AC/tambah','DataController@tambahbpgac');
Route::post('/dashboard/BALONG PANGGANG/AC/store','DataController@storebpgac');
Route::post('/dashboard/BALONG PANGGANG/AC/update','DataController@updatebpgac');

Route::get('/dashboard/BALONG PANGGANG/GENERATOR',['as' => 'bpg_generator', 'uses' =>'DataController@indexbpggenerator']);
Route::get('/dashboard/BALONG PANGGANG/GENERATOR/tambah','DataController@tambahbpggenerator');
Route::post('/dashboard/BALONG PANGGANG/GENERATOR/store','DataController@storebpggenerator');
Route::post('/dashboard/BALONG PANGGANG/GENERATOR/update','DataController@updatebpggenerator');

Route::get('/dashboard/BALONG PANGGANG/RECTIFIER',['as' => 'bpg_rectifier', 'uses' =>'DataController@indexbpgrectifier']);
Route::get('/dashboard/BALONG PANGGANG/RECTIFIER/tambah','DataController@tambahbpgrectifier');
Route::post('/dashboard/BALONG PANGGANG/RECTIFIER/store','DataController@storebpgrectifier');
Route::post('/dashboard/BALONG PANGGANG/RECTIFIER/update','DataController@updatebpgrectifier');

Route::get('/dashboard/BALONG PANGGANG/BATTERE',['as' => 'bpg_battere', 'uses' =>'DataController@indexbpgbattere']);
Route::get('/dashboard/BALONG PANGGANG/BATTERE/tambah','DataController@tambahbpgbattere');
Route::post('/dashboard/BALONG PANGGANG/BATTERE/store','DataController@storebpgbattere');
Route::post('/dashboard/BALONG PANGGANG/BATTERE/update','DataController@updatebpgbattere');

// -- BAWEAN --
Route::get('/dashboard/BAWEAN/PLN',['as' => 'bwn_pln', 'uses' =>'DataController@indexbwnpln']);
Route::get('/dashboard/BAWEAN/PLN/tambah','DataController@tambahbwnpln');
Route::post('/dashboard/BAWEAN/PLN/store','DataController@storebwnpln');
Route::post('/dashboard/BAWEAN/PLN/update','DataController@updatebwnpln');

Route::get('/dashboard/BAWEAN/AC',['as' => 'bwn_ac', 'uses' =>'DataController@indexbwnac']);
Route::get('/dashboard/BAWEAN/AC/tambah','DataController@tambahbwnac');
Route::post('/dashboard/BAWEAN/AC/store','DataController@storebwnac');
Route::post('/dashboard/BAWEAN/AC/update','DataController@updatebwnac');

Route::get('/dashboard/BAWEAN/GENERATOR',['as' => 'bwn_generator', 'uses' =>'DataController@indexbwngenerator']);
Route::get('/dashboard/BAWEAN/GENERATOR/tambah','DataController@tambahbwngenerator');
Route::post('/dashboard/BAWEAN/GENERATOR/store','DataController@storebwngenerator');
Route::post('/dashboard/BAWEAN/GENERATOR/update','DataController@updatebwngenerator');

Route::get('/dashboard/BAWEAN/RECTIFIER',['as' => 'bwn_rectifier', 'uses' =>'DataController@indexbwnrectifier']);
Route::get('/dashboard/BAWEAN/RECTIFIER/tambah','DataController@tambahbwnrectifier');
Route::post('/dashboard/BAWEAN/RECTIFIER/store','DataController@storebwnrectifier');
Route::post('/dashboard/BAWEAN/RECTIFIER/update','DataController@updatebwnrectifier');

Route::get('/dashboard/BAWEAN/BATTERE',['as' => 'bwn_battere', 'uses' =>'DataController@indexbwnbattere']);
Route::get('/dashboard/BAWEAN/BATTERE/tambah','DataController@tambahbwnbattere');
Route::post('/dashboard/BAWEAN/BATTERE/store','DataController@storebwnbattere');
Route::post('/dashboard/BAWEAN/BATTERE/update','DataController@updatebwnbattere');

// -- CERME --
Route::get('/dashboard/CERME/PLN',['as' => 'crm_pln', 'uses' =>'DataController@indexcrmpln']);
Route::get('/dashboard/CERME/PLN/tambah','DataController@tambahcrmpln');
Route::post('/dashboard/CERME/PLN/store','DataController@storecrmpln');
Route::post('/dashboard/CERME/PLN/update','DataController@updatecrmpln');

Route::get('/dashboard/CERME/AC',['as' => 'crm_ac', 'uses' =>'DataController@indexcrmac']);
Route::get('/dashboard/CERME/AC/tambah','DataController@tambahcrmac');
Route::post('/dashboard/CERME/AC/store','DataController@storecrmac');
Route::post('/dashboard/CERME/AC/update','DataController@updatecrmac');

Route::get('/dashboard/CERME/GENERATOR',['as' => 'crm_generator', 'uses' =>'DataController@indexcrmgenerator']);
Route::get('/dashboard/CERME/GENERATOR/tambah','DataController@tambahcrmgenerator');
Route::post('/dashboard/CERME/GENERATOR/store','DataController@storecrmgenerator');
Route::post('/dashboard/CERME/GENERATOR/update','DataController@updatecrmgenerator');

Route::get('/dashboard/CERME/RECTIFIER',['as' => 'crm_rectifier', 'uses' =>'DataController@indexcrmrectifier']);
Route::get('/dashboard/CERME/RECTIFIER/tambah','DataController@tambahcrmrectifier');
Route::post('/dashboard/CERME/RECTIFIER/store','DataController@storecrmrectifier');
Route::post('/dashboard/CERME/RECTIFIER/update','DataController@updatecrmrectifier');

Route::get('/dashboard/CERME/BATTERE',['as' => 'crm_battere', 'uses' =>'DataController@indexcrmbattere']);
Route::get('/dashboard/CERME/BATTERE/tambah','DataController@tambahcrmbattere');
Route::post('/dashboard/CERME/BATTERE/store','DataController@storecrmbattere');
Route::post('/dashboard/CERME/BATTERE/update','DataController@updatecrmbattere');

// -- DUDUK SAMPEYAN --
Route::get('/dashboard/DUDUK SAMPEYAN/PLN',['as' => 'dds_pln', 'uses' =>'DataController@indexddspln']);
Route::get('/dashboard/DUDUK SAMPEYAN/PLN/tambah','DataController@tambahddspln');
Route::post('/dashboard/DUDUK SAMPEYAN/PLN/store','DataController@storeddspln');
Route::post('/dashboard/DUDUK SAMPEYAN/PLN/update','DataController@updateddspln');

Route::get('/dashboard/DUDUK SAMPEYAN/AC',['as' => 'dds_ac', 'uses' =>'DataController@indexddsac']);
Route::get('/dashboard/DUDUK SAMPEYAN/AC/tambah','DataController@tambahddsac');
Route::post('/dashboard/DUDUK SAMPEYAN/AC/store','DataController@storeddsac');
Route::post('/dashboard/DUDUK SAMPEYAN/AC/update','DataController@updateddsac');

Route::get('/dashboard/DUDUK SAMPEYAN/GENERATOR',['as' => 'dds_generator', 'uses' =>'DataController@indexddsgenerator']);
Route::get('/dashboard/DUDUK SAMPEYAN/GENERATOR/tambah','DataController@tambahddsgenerator');
Route::post('/dashboard/DUDUK SAMPEYAN/GENERATOR/store','DataController@storeddsgenerator');
Route::post('/dashboard/DUDUK SAMPEYAN/GENERATOR/update','DataController@updateddsgenerator');

Route::get('/dashboard/DUDUK SAMPEYAN/RECTIFIER',['as' => 'dds_rectifier', 'uses' =>'DataController@indexddsrectifier']);
Route::get('/dashboard/DUDUK SAMPEYAN/RECTIFIER/tambah','DataController@tambahddsrectifier');
Route::post('/dashboard/DUDUK SAMPEYAN/RECTIFIER/store','DataController@storeddsrectifier');
Route::post('/dashboard/DUDUK SAMPEYAN/RECTIFIER/update','DataController@updateddsrectifier');

Route::get('/dashboard/DUDUK SAMPEYAN/BATTERE',['as' => 'dds_battere', 'uses' =>'DataController@indexddsbattere']);
Route::get('/dashboard/DUDUK SAMPEYAN/BATTERE/tambah','DataController@tambahddsbattere');
Route::post('/dashboard/DUDUK SAMPEYAN/BATTERE/store','DataController@storeddsbattere');
Route::post('/dashboard/DUDUK SAMPEYAN/BATTERE/update','DataController@updateddsbattere');

// -- GRESIK --
Route::get('/dashboard/GRESIK/PLN',['as' => 'gsk_pln', 'uses' =>'DataController@indexgskpln']);
Route::get('/dashboard/GRESIK/PLN/tambah','DataController@tambahgskpln');
Route::post('/dashboard/GRESIK/PLN/store','DataController@storegskpln');
Route::post('/dashboard/GRESIK/PLN/update','DataController@updategskpln');

Route::get('/dashboard/GRESIK/AC',['as' => 'gsk_ac', 'uses' =>'DataController@indexgskac']);
Route::get('/dashboard/GRESIK/AC/tambah','DataController@tambahgskac');
Route::post('/dashboard/GRESIK/AC/store','DataController@storegskac');
Route::post('/dashboard/GRESIK/AC/update','DataController@updategskac');

Route::get('/dashboard/GRESIK/GENERATOR',['as' => 'gsk_generator', 'uses' =>'DataController@indexgskgenerator']);
Route::get('/dashboard/GRESIK/GENERATOR/tambah','DataController@tambahgskgenerator');
Route::post('/dashboard/GRESIK/GENERATOR/store','DataController@storegskgenerator');
Route::post('/dashboard/GRESIK/GENERATOR/update','DataController@updategskgenerator');

Route::get('/dashboard/GRESIK/RECTIFIER',['as' => 'gsk_rectifier', 'uses' =>'DataController@indexgskrectifier']);
Route::get('/dashboard/GRESIK/RECTIFIER/tambah','DataController@tambahgskrectifier');
Route::post('/dashboard/GRESIK/RECTIFIER/store','DataController@storegskrectifier');
Route::post('/dashboard/GRESIK/RECTIFIER/update','DataController@updategskrectifier');

Route::get('/dashboard/GRESIK/BATTERE',['as' => 'gsk_battere', 'uses' =>'DataController@indexgskbattere']);
Route::get('/dashboard/GRESIK/BATTERE/tambah','DataController@tambahgskbattere');
Route::post('/dashboard/GRESIK/BATTERE/store','DataController@storegskbattere');
Route::post('/dashboard/GRESIK/BATTERE/update','DataController@updategskbattere');

// -- KEBALEN --
Route::get('/dashboard/KEBALEN/PLN',['as' => 'kbl_pln', 'uses' =>'DataController@indexkblpln']);
Route::get('/dashboard/KEBALEN/PLN/tambah','DataController@tambahkblpln');
Route::post('/dashboard/KEBALEN/PLN/store','DataController@storekblpln');
Route::post('/dashboard/KEBALEN/PLN/update','DataController@updatekblpln');

Route::get('/dashboard/KEBALEN/AC',['as' => 'kbl_ac', 'uses' =>'DataController@indexkblac']);
Route::get('/dashboard/KEBALEN/AC/tambah','DataController@tambahkblac');
Route::post('/dashboard/KEBALEN/AC/store','DataController@storekblac');
Route::post('/dashboard/KEBALEN/AC/update','DataController@updatekblac');

Route::get('/dashboard/KEBALEN/GENERATOR',['as' => 'kbl_generator', 'uses' =>'DataController@indexkblgenerator']);
Route::get('/dashboard/KEBALEN/GENERATOR/tambah','DataController@tambahkblgenerator');
Route::post('/dashboard/KEBALEN/GENERATOR/store','DataController@storekblgenerator');
Route::post('/dashboard/KEBALEN/GENERATOR/update','DataController@updatekblgenerator');

Route::get('/dashboard/KEBALEN/RECTIFIER',['as' => 'kbl_rectifier', 'uses' =>'DataController@indexkblrectifier']);
Route::get('/dashboard/KEBALEN/RECTIFIER/tambah','DataController@tambahkblrectifier');
Route::post('/dashboard/KEBALEN/RECTIFIER/store','DataController@storekblrectifier');
Route::post('/dashboard/KEBALEN/RECTIFIER/update','DataController@updatekblrectifier');

Route::get('/dashboard/KEBALEN/BATTERE',['as' => 'kbl_battere', 'uses' =>'DataController@indexkblbattere']);
Route::get('/dashboard/KEBALEN/BATTERE/tambah','DataController@tambahkblbattere');
Route::post('/dashboard/KEBALEN/BATTERE/store','DataController@storekblbattere');
Route::post('/dashboard/KEBALEN/BATTERE/update','DataController@updatekblbattere');

// -- KEDAMEAN --
Route::get('/dashboard/KEDAMEAN/PLN',['as' => 'kdm_pln', 'uses' =>'DataController@indexkdmpln']);
Route::get('/dashboard/KEDAMEAN/PLN/tambah','DataController@tambahkdmpln');
Route::post('/dashboard/KEDAMEAN/PLN/store','DataController@storekdmpln');
Route::post('/dashboard/KEDAMEAN/PLN/update','DataController@updatekdmpln');

Route::get('/dashboard/KEDAMEAN/AC',['as' => 'kdm_ac', 'uses' =>'DataController@indexkdmac']);
Route::get('/dashboard/KEDAMEAN/AC/tambah','DataController@tambahkdmac');
Route::post('/dashboard/KEDAMEAN/AC/store','DataController@storekdmac');
Route::post('/dashboard/KEDAMEAN/AC/update','DataController@updatekdmac');

Route::get('/dashboard/KEDAMEAN/GENERATOR',['as' => 'kdm_generator', 'uses' =>'DataController@indexkdmgenerator']);
Route::get('/dashboard/KEDAMEAN/GENERATOR/tambah','DataController@tambahkdmgenerator');
Route::post('/dashboard/KEDAMEAN/GENERATOR/store','DataController@storekdmgenerator');
Route::post('/dashboard/KEDAMEAN/GENERATOR/update','DataController@updatekdmgenerator');

Route::get('/dashboard/KEDAMEAN/RECTIFIER',['as' => 'kdm_rectifier', 'uses' =>'DataController@indexkdmrectifier']);
Route::get('/dashboard/KEDAMEAN/RECTIFIER/tambah','DataController@tambahkdmrectifier');
Route::post('/dashboard/KEDAMEAN/RECTIFIER/store','DataController@storekdmrectifier');
Route::post('/dashboard/KEDAMEAN/RECTIFIER/update','DataController@updatekdmrectifier');

Route::get('/dashboard/KEDAMEAN/BATTERE',['as' => 'kdm_battere', 'uses' =>'DataController@indexkdmbattere']);
Route::get('/dashboard/KEDAMEAN/BATTERE/tambah','DataController@tambahkdmbattere');
Route::post('/dashboard/KEDAMEAN/BATTERE/store','DataController@storekdmbattere');
Route::post('/dashboard/KEDAMEAN/BATTERE/update','DataController@updatekdmbattere');

// -- KENJERAN --
Route::get('/dashboard/KENJERAN/PLN',['as' => 'kjr_pln', 'uses' =>'DataController@indexkjrpln']);
Route::get('/dashboard/KENJERAN/PLN/tambah','DataController@tambahkjrpln');
Route::post('/dashboard/KENJERAN/PLN/store','DataController@storekjrpln');
Route::post('/dashboard/KENJERAN/PLN/update','DataController@updatekjrpln');

Route::get('/dashboard/KENJERAN/AC',['as' => 'kjr_ac', 'uses' =>'DataController@indexkjrac']);
Route::get('/dashboard/KENJERAN/AC/tambah','DataController@tambahkjrac');
Route::post('/dashboard/KENJERAN/AC/store','DataController@storekjrac');
Route::post('/dashboard/KENJERAN/AC/update','DataController@updatekjrac');

Route::get('/dashboard/KENJERAN/GENERATOR',['as' => 'kjr_generator', 'uses' =>'DataController@indexkjrgenerator']);
Route::get('/dashboard/KENJERAN/GENERATOR/tambah','DataController@tambahkjrgenerator');
Route::post('/dashboard/KENJERAN/GENERATOR/store','DataController@storekjrgenerator');
Route::post('/dashboard/KENJERAN/GENERATOR/update','DataController@updatekjrgenerator');

Route::get('/dashboard/KENJERAN/RECTIFIER',['as' => 'kjr_rectifier', 'uses' =>'DataController@indexkjrrectifier']);
Route::get('/dashboard/KENJERAN/RECTIFIER/tambah','DataController@tambahkjrrectifier');
Route::post('/dashboard/KENJERAN/RECTIFIER/store','DataController@storekjrrectifier');
Route::post('/dashboard/KENJERAN/RECTIFIER/update','DataController@updatekjrrectifier');

Route::get('/dashboard/KENJERAN/BATTERE',['as' => 'kjr_battere', 'uses' =>'DataController@indexkjrbattere']);
Route::get('/dashboard/KENJERAN/BATTERE/tambah','DataController@tambahkjrbattere');
Route::post('/dashboard/KENJERAN/BATTERE/store','DataController@storekjrbattere');
Route::post('/dashboard/KENJERAN/BATTERE/update','DataController@updatekjrbattere');

// -- KALIANAK --
Route::get('/dashboard/KALIANAK/PLN',['as' => 'kla_pln', 'uses' =>'DataController@indexklapln']);
Route::get('/dashboard/KALIANAK/PLN/tambah','DataController@tambahklapln');
Route::post('/dashboard/KALIANAK/PLN/store','DataController@storeklapln');
Route::post('/dashboard/KALIANAK/PLN/update','DataController@updateklapln');

Route::get('/dashboard/KALIANAK/AC',['as' => 'kla_ac', 'uses' =>'DataController@indexklaac']);
Route::get('/dashboard/KALIANAK/AC/tambah','DataController@tambahklaac');
Route::post('/dashboard/KALIANAK/AC/store','DataController@storeklaac');
Route::post('/dashboard/KALIANAK/AC/update','DataController@updateklaac');

Route::get('/dashboard/KALIANAK/GENERATOR',['as' => 'kla_generator', 'uses' =>'DataController@indexklagenerator']);
Route::get('/dashboard/KALIANAK/GENERATOR/tambah','DataController@tambahklagenerator');
Route::post('/dashboard/KALIANAK/GENERATOR/store','DataController@storeklagenerator');
Route::post('/dashboard/KALIANAK/GENERATOR/update','DataController@updateklagenerator');

Route::get('/dashboard/KALIANAK/RECTIFIER',['as' => 'kla_rectifier', 'uses' =>'DataController@indexklarectifier']);
Route::get('/dashboard/KALIANAK/RECTIFIER/tambah','DataController@tambahklarectifier');
Route::post('/dashboard/KALIANAK/RECTIFIER/store','DataController@storeklarectifier');
Route::post('/dashboard/KALIANAK/RECTIFIER/update','DataController@updateklarectifier');

Route::get('/dashboard/KALIANAK/BATTERE',['as' => 'kla_battere', 'uses' =>'DataController@indexklabattere']);
Route::get('/dashboard/KALIANAK/BATTERE/tambah','DataController@tambahklabattere');
Route::post('/dashboard/KALIANAK/BATTERE/store','DataController@storeklabattere');
Route::post('/dashboard/KALIANAK/BATTERE/update','DataController@updateklabattere');

// -- KANDANGAN --
Route::get('/dashboard/KANDANGAN/PLN',['as' => 'knn_pln', 'uses' =>'DataController@indexknnpln']);
Route::get('/dashboard/KANDANGAN/PLN/tambah','DataController@tambahknnpln');
Route::post('/dashboard/KANDANGAN/PLN/store','DataController@storeknnpln');
Route::post('/dashboard/KANDANGAN/PLN/update','DataController@updateknnpln');

Route::get('/dashboard/KANDANGAN/AC',['as' => 'knn_ac', 'uses' =>'DataController@indexknnac']);
Route::get('/dashboard/KANDANGAN/AC/tambah','DataController@tambahknnac');
Route::post('/dashboard/KANDANGAN/AC/store','DataController@storeknnac');
Route::post('/dashboard/KANDANGAN/AC/update','DataController@updateknnac');

Route::get('/dashboard/KANDANGAN/GENERATOR',['as' => 'knn_generator', 'uses' =>'DataController@indexknngenerator']);
Route::get('/dashboard/KANDANGAN/GENERATOR/tambah','DataController@tambahknngenerator');
Route::post('/dashboard/KANDANGAN/GENERATOR/store','DataController@storeknngenerator');
Route::post('/dashboard/KANDANGAN/GENERATOR/update','DataController@updateknngenerator');

Route::get('/dashboard/KANDANGAN/RECTIFIER',['as' => 'knn_rectifier', 'uses' =>'DataController@indexknnrectifier']);
Route::get('/dashboard/KANDANGAN/RECTIFIER/tambah','DataController@tambahknnrectifier');
Route::post('/dashboard/KANDANGAN/RECTIFIER/store','DataController@storeknnrectifier');
Route::post('/dashboard/KANDANGAN/RECTIFIER/update','DataController@updateknnrectifier');

Route::get('/dashboard/KANDANGAN/BATTERE',['as' => 'knn_battere', 'uses' =>'DataController@indexknnbattere']);
Route::get('/dashboard/KANDANGAN/BATTERE/tambah','DataController@tambahknnbattere');
Route::post('/dashboard/KANDANGAN/BATTERE/store','DataController@storeknnbattere');
Route::post('/dashboard/KANDANGAN/BATTERE/update','DataController@updateknnbattere');

// -- KAPASAN --
Route::get('/dashboard/KAPASAN/PLN',['as' => 'kps_pln', 'uses' =>'DataController@indexkpspln']);
Route::get('/dashboard/KAPASAN/PLN/tambah','DataController@tambahkpspln');
Route::post('/dashboard/KAPASAN/PLN/store','DataController@storekpspln');
Route::post('/dashboard/KAPASAN/PLN/update','DataController@updatekpspln');

Route::get('/dashboard/KAPASAN/AC',['as' => 'kps_ac', 'uses' =>'DataController@indexkpsac']);
Route::get('/dashboard/KAPASAN/AC/tambah','DataController@tambahkpsac');
Route::post('/dashboard/KAPASAN/AC/store','DataController@storekpsac');
Route::post('/dashboard/KAPASAN/AC/update','DataController@updatekpsac');

Route::get('/dashboard/KAPASAN/GENERATOR',['as' => 'kps_generator', 'uses' =>'DataController@indexkpsgenerator']);
Route::get('/dashboard/KAPASAN/GENERATOR/tambah','DataController@tambahkpsgenerator');
Route::post('/dashboard/KAPASAN/GENERATOR/store','DataController@storekpsgenerator');
Route::post('/dashboard/KAPASAN/GENERATOR/update','DataController@updatekpsgenerator');

Route::get('/dashboard/KAPASAN/RECTIFIER',['as' => 'kps_rectifier', 'uses' =>'DataController@indexkpsrectifier']);
Route::get('/dashboard/KAPASAN/RECTIFIER/tambah','DataController@tambahkpsrectifier');
Route::post('/dashboard/KAPASAN/RECTIFIER/store','DataController@storekpsrectifier');
Route::post('/dashboard/KAPASAN/RECTIFIER/update','DataController@updatekpsrectifier');

Route::get('/dashboard/KAPASAN/BATTERE',['as' => 'kps_battere', 'uses' =>'DataController@indexkpsbattere']);
Route::get('/dashboard/KAPASAN/BATTERE/tambah','DataController@tambahkpsbattere');
Route::post('/dashboard/KAPASAN/BATTERE/store','DataController@storekpsbattere');
Route::post('/dashboard/KAPASAN/BATTERE/update','DataController@updatekpsbattere');

// -- KARANG PILANG --
Route::get('/dashboard/KARANG PILANG/PLN',['as' => 'KARANG PILANG_pln', 'uses' =>'DataController@indexKARANG PILANGpln']);
Route::get('/dashboard/KARANG PILANG/PLN/tambah','DataController@tambahKARANG PILANGpln');
Route::post('/dashboard/KARANG PILANG/PLN/store','DataController@storeKARANG PILANGpln');
Route::post('/dashboard/KARANG PILANG/PLN/update','DataController@updateKARANG PILANGpln');

Route::get('/dashboard/KARANG PILANG/AC',['as' => 'KARANG PILANG_ac', 'uses' =>'DataController@indexKARANG PILANGac']);
Route::get('/dashboard/KARANG PILANG/AC/tambah','DataController@tambahKARANG PILANGac');
Route::post('/dashboard/KARANG PILANG/AC/store','DataController@storeKARANG PILANGac');
Route::post('/dashboard/KARANG PILANG/AC/update','DataController@updateKARANG PILANGac');

Route::get('/dashboard/KARANG PILANG/GENERATOR',['as' => 'KARANG PILANG_generator', 'uses' =>'DataController@indexKARANG PILANGgenerator']);
Route::get('/dashboard/KARANG PILANG/GENERATOR/tambah','DataController@tambahKARANG PILANGgenerator');
Route::post('/dashboard/KARANG PILANG/GENERATOR/store','DataController@storeKARANG PILANGgenerator');
Route::post('/dashboard/KARANG PILANG/GENERATOR/update','DataController@updateKARANG PILANGgenerator');

Route::get('/dashboard/KARANG PILANG/RECTIFIER',['as' => 'KARANG PILANG_rectifier', 'uses' =>'DataController@indexKARANG PILANGrectifier']);
Route::get('/dashboard/KARANG PILANG/RECTIFIER/tambah','DataController@tambahKARANG PILANGrectifier');
Route::post('/dashboard/KARANG PILANG/RECTIFIER/store','DataController@storeKARANG PILANGrectifier');
Route::post('/dashboard/KARANG PILANG/RECTIFIER/update','DataController@updateKARANG PILANGrectifier');

Route::get('/dashboard/KARANG PILANG/BATTERE',['as' => 'KARANG PILANG_battere', 'uses' =>'DataController@indexKARANG PILANGbattere']);
Route::get('/dashboard/KARANG PILANG/BATTERE/tambah','DataController@tambahKARANG PILANGbattere');
Route::post('/dashboard/KARANG PILANG/BATTERE/store','DataController@storeKARANG PILANGbattere');
Route::post('/dashboard/KARANG PILANG/BATTERE/update','DataController@updateKARANG PILANGbattere');

// -- LAKARSANTRI --
Route::get('/dashboard/LAKARSANTRI/PLN',['as' => 'lks_pln', 'uses' =>'DataController@indexlkspln']);
Route::get('/dashboard/LAKARSANTRI/PLN/tambah','DataController@tambahlkspln');
Route::post('/dashboard/LAKARSANTRI/PLN/store','DataController@storelkspln');
Route::post('/dashboard/LAKARSANTRI/PLN/update','DataController@updatelkspln');

Route::get('/dashboard/LAKARSANTRI/AC',['as' => 'lks_ac', 'uses' =>'DataController@indexlksac']);
Route::get('/dashboard/LAKARSANTRI/AC/tambah','DataController@tambahlksac');
Route::post('/dashboard/LAKARSANTRI/AC/store','DataController@storelksac');
Route::post('/dashboard/LAKARSANTRI/AC/update','DataController@updatelksac');

Route::get('/dashboard/LAKARSANTRI/GENERATOR',['as' => 'lks_generator', 'uses' =>'DataController@indexlksgenerator']);
Route::get('/dashboard/LAKARSANTRI/GENERATOR/tambah','DataController@tambahlksgenerator');
Route::post('/dashboard/LAKARSANTRI/GENERATOR/store','DataController@storelksgenerator');
Route::post('/dashboard/LAKARSANTRI/GENERATOR/update','DataController@updatelksgenerator');

Route::get('/dashboard/LAKARSANTRI/RECTIFIER',['as' => 'lks_rectifier', 'uses' =>'DataController@indexlksrectifier']);
Route::get('/dashboard/LAKARSANTRI/RECTIFIER/tambah','DataController@tambahlksrectifier');
Route::post('/dashboard/LAKARSANTRI/RECTIFIER/store','DataController@storelksrectifier');
Route::post('/dashboard/LAKARSANTRI/RECTIFIER/update','DataController@updatelksrectifier');

Route::get('/dashboard/LAKARSANTRI/BATTERE',['as' => 'lks_battere', 'uses' =>'DataController@indexlksbattere']);
Route::get('/dashboard/LAKARSANTRI/BATTERE/tambah','DataController@tambahlksbattere');
Route::post('/dashboard/LAKARSANTRI/BATTERE/store','DataController@storelksbattere');
Route::post('/dashboard/LAKARSANTRI/BATTERE/update','DataController@updatelksbattere');

// -- LAMONGAN --
Route::get('/dashboard/LAMONGAN/PLN',['as' => 'lmg_pln', 'uses' =>'DataController@indexlmgpln']);
Route::get('/dashboard/LAMONGAN/PLN/tambah','DataController@tambahlmgpln');
Route::post('/dashboard/LAMONGAN/PLN/store','DataController@storelmgpln');
Route::post('/dashboard/LAMONGAN/PLN/update','DataController@updatelmgpln');

Route::get('/dashboard/LAMONGAN/AC',['as' => 'lmg_ac', 'uses' =>'DataController@indexlmgac']);
Route::get('/dashboard/LAMONGAN/AC/tambah','DataController@tambahlmgac');
Route::post('/dashboard/LAMONGAN/AC/store','DataController@storelmgac');
Route::post('/dashboard/LAMONGAN/AC/update','DataController@updatelmgac');

Route::get('/dashboard/LAMONGAN/GENERATOR',['as' => 'lmg_generator', 'uses' =>'DataController@indexlmggenerator']);
Route::get('/dashboard/LAMONGAN/GENERATOR/tambah','DataController@tambahlmggenerator');
Route::post('/dashboard/LAMONGAN/GENERATOR/store','DataController@storelmggenerator');
Route::post('/dashboard/LAMONGAN/GENERATOR/update','DataController@updatelmggenerator');

Route::get('/dashboard/LAMONGAN/RECTIFIER',['as' => 'lmg_rectifier', 'uses' =>'DataController@indexlmgrectifier']);
Route::get('/dashboard/LAMONGAN/RECTIFIER/tambah','DataController@tambahlmgrectifier');
Route::post('/dashboard/LAMONGAN/RECTIFIER/store','DataController@storelmgrectifier');
Route::post('/dashboard/LAMONGAN/RECTIFIER/update','DataController@updatelmgrectifier');

Route::get('/dashboard/LAMONGAN/BATTERE',['as' => 'lmg_battere', 'uses' =>'DataController@indexlmgbattere']);
Route::get('/dashboard/LAMONGAN/BATTERE/tambah','DataController@tambahlmgbattere');
Route::post('/dashboard/LAMONGAN/BATTERE/store','DataController@storelmgbattere');
Route::post('/dashboard/LAMONGAN/BATTERE/update','DataController@updatelmgbattere');

// -- MERGOYOSO --
Route::get('/dashboard/MERGOYOSO/PLN',['as' => 'mgo_pln', 'uses' =>'DataController@indexmgopln']);
Route::get('/dashboard/MERGOYOSO/PLN/tambah','DataController@tambahmgopln');
Route::post('/dashboard/MERGOYOSO/PLN/store','DataController@storemgopln');
Route::post('/dashboard/MERGOYOSO/PLN/update','DataController@updatemgopln');

Route::get('/dashboard/MERGOYOSO/AC',['as' => 'mgo_ac', 'uses' =>'DataController@indexmgoac']);
Route::get('/dashboard/MERGOYOSO/AC/tambah','DataController@tambahmgoac');
Route::post('/dashboard/MERGOYOSO/AC/store','DataController@storemgoac');
Route::post('/dashboard/MERGOYOSO/AC/update','DataController@updatemgoac');

Route::get('/dashboard/MERGOYOSO/GENERATOR',['as' => 'mgo_generator', 'uses' =>'DataController@indexmgogenerator']);
Route::get('/dashboard/MERGOYOSO/GENERATOR/tambah','DataController@tambahmgogenerator');
Route::post('/dashboard/MERGOYOSO/GENERATOR/store','DataController@storemgogenerator');
Route::post('/dashboard/MERGOYOSO/GENERATOR/update','DataController@updatemgogenerator');

Route::get('/dashboard/MERGOYOSO/RECTIFIER',['as' => 'mgo_rectifier', 'uses' =>'DataController@indexmgorectifier']);
Route::get('/dashboard/MERGOYOSO/RECTIFIER/tambah','DataController@tambahmgorectifier');
Route::post('/dashboard/MERGOYOSO/RECTIFIER/store','DataController@storemgorectifier');
Route::post('/dashboard/MERGOYOSO/RECTIFIER/update','DataController@updatemgorectifier');

Route::get('/dashboard/MERGOYOSO/BATTERE',['as' => 'mgo_battere', 'uses' =>'DataController@indexmgobattere']);
Route::get('/dashboard/MERGOYOSO/BATTERE/tambah','DataController@tambahmgobattere');
Route::post('/dashboard/MERGOYOSO/BATTERE/store','DataController@storemgobattere');
Route::post('/dashboard/MERGOYOSO/BATTERE/update','DataController@updatemgobattere');

// -- PONGANGAN --
Route::get('/dashboard/PONGANGAN/PLN',['as' => 'pog_pln', 'uses' =>'DataController@indexpogpln']);
Route::get('/dashboard/PONGANGAN/PLN/tambah','DataController@tambahpogpln');
Route::post('/dashboard/PONGANGAN/PLN/store','DataController@storepogpln');
Route::post('/dashboard/PONGANGAN/PLN/update','DataController@updatepogpln');

Route::get('/dashboard/PONGANGAN/AC',['as' => 'pog_ac', 'uses' =>'DataController@indexpogac']);
Route::get('/dashboard/PONGANGAN/AC/tambah','DataController@tambahpogac');
Route::post('/dashboard/PONGANGAN/AC/store','DataController@storepogac');
Route::post('/dashboard/PONGANGAN/AC/update','DataController@updatepogac');

Route::get('/dashboard/PONGANGAN/GENERATOR',['as' => 'pog_generator', 'uses' =>'DataController@indexpoggenerator']);
Route::get('/dashboard/PONGANGAN/GENERATOR/tambah','DataController@tambahpoggenerator');
Route::post('/dashboard/PONGANGAN/GENERATOR/store','DataController@storepoggenerator');
Route::post('/dashboard/PONGANGAN/GENERATOR/update','DataController@updatepoggenerator');

Route::get('/dashboard/PONGANGAN/RECTIFIER',['as' => 'pog_rectifier', 'uses' =>'DataController@indexpogrectifier']);
Route::get('/dashboard/PONGANGAN/RECTIFIER/tambah','DataController@tambahpogrectifier');
Route::post('/dashboard/PONGANGAN/RECTIFIER/store','DataController@storepogrectifier');
Route::post('/dashboard/PONGANGAN/RECTIFIER/update','DataController@updatepogrectifier');

Route::get('/dashboard/PONGANGAN/BATTERE',['as' => 'pog_battere', 'uses' =>'DataController@indexpogbattere']);
Route::get('/dashboard/PONGANGAN/BATTERE/tambah','DataController@tambahpogbattere');
Route::post('/dashboard/PONGANGAN/BATTERE/store','DataController@storepogbattere');
Route::post('/dashboard/PONGANGAN/BATTERE/update','DataController@updatepogbattere');

// -- SEDAYU --
Route::get('/dashboard/SEDAYU/PLN',['as' => 'sdy_pln', 'uses' =>'DataController@indexsdypln']);
Route::get('/dashboard/SEDAYU/PLN/tambah','DataController@tambahsdypln');
Route::post('/dashboard/SEDAYU/PLN/store','DataController@storesdypln');
Route::post('/dashboard/SEDAYU/PLN/update','DataController@updatesdypln');

Route::get('/dashboard/SEDAYU/AC',['as' => 'sdy_ac', 'uses' =>'DataController@indexsdyac']);
Route::get('/dashboard/SEDAYU/AC/tambah','DataController@tambahsdyac');
Route::post('/dashboard/SEDAYU/AC/store','DataController@storesdyac');
Route::post('/dashboard/SEDAYU/AC/update','DataController@updatesdyac');

Route::get('/dashboard/SEDAYU/GENERATOR',['as' => 'sdy_generator', 'uses' =>'DataController@indexsdygenerator']);
Route::get('/dashboard/SEDAYU/GENERATOR/tambah','DataController@tambahsdygenerator');
Route::post('/dashboard/SEDAYU/GENERATOR/store','DataController@storesdygenerator');
Route::post('/dashboard/SEDAYU/GENERATOR/update','DataController@updatesdygenerator');

Route::get('/dashboard/SEDAYU/RECTIFIER',['as' => 'sdy_rectifier', 'uses' =>'DataController@indexsdyrectifier']);
Route::get('/dashboard/SEDAYU/RECTIFIER/tambah','DataController@tambahsdyrectifier');
Route::post('/dashboard/SEDAYU/RECTIFIER/store','DataController@storesdyrectifier');
Route::post('/dashboard/SEDAYU/RECTIFIER/update','DataController@updatesdyrectifier');

Route::get('/dashboard/SEDAYU/BATTERE',['as' => 'sdy_battere', 'uses' =>'DataController@indexsdybattere']);
Route::get('/dashboard/SEDAYU/BATTERE/tambah','DataController@tambahsdybattere');
Route::post('/dashboard/SEDAYU/BATTERE/store','DataController@storesdybattere');
Route::post('/dashboard/SEDAYU/BATTERE/update','DataController@updatesdybattere');

// -- SUKODADI --
Route::get('/dashboard/SUKODADI/PLN',['as' => 'skd_pln', 'uses' =>'DataController@indexskdpln']);
Route::get('/dashboard/SUKODADI/PLN/tambah','DataController@tambahskdpln');
Route::post('/dashboard/SUKODADI/PLN/store','DataController@storeskdpln');
Route::post('/dashboard/SUKODADI/PLN/update','DataController@updateskdpln');

Route::get('/dashboard/SUKODADI/AC',['as' => 'skd_ac', 'uses' =>'DataController@indexskdac']);
Route::get('/dashboard/SUKODADI/AC/tambah','DataController@tambahskdac');
Route::post('/dashboard/SUKODADI/AC/store','DataController@storeskdac');
Route::post('/dashboard/SUKODADI/AC/update','DataController@updateskdac');

Route::get('/dashboard/SUKODADI/GENERATOR',['as' => 'skd_generator', 'uses' =>'DataController@indexskdgenerator']);
Route::get('/dashboard/SUKODADI/GENERATOR/tambah','DataController@tambahskdgenerator');
Route::post('/dashboard/SUKODADI/GENERATOR/store','DataController@storeskdgenerator');
Route::post('/dashboard/SUKODADI/GENERATOR/update','DataController@updateskdgenerator');

Route::get('/dashboard/SUKODADI/RECTIFIER',['as' => 'skd_rectifier', 'uses' =>'DataController@indexskdrectifier']);
Route::get('/dashboard/SUKODADI/RECTIFIER/tambah','DataController@tambahskdrectifier');
Route::post('/dashboard/SUKODADI/RECTIFIER/store','DataController@storeskdrectifier');
Route::post('/dashboard/SUKODADI/RECTIFIER/update','DataController@updateskdrectifier');

Route::get('/dashboard/SUKODADI/BATTERE',['as' => 'skd_battere', 'uses' =>'DataController@indexskdbattere']);
Route::get('/dashboard/SUKODADI/BATTERE/tambah','DataController@tambahskdbattere');
Route::post('/dashboard/SUKODADI/BATTERE/store','DataController@storeskdbattere');
Route::post('/dashboard/SUKODADI/BATTERE/update','DataController@updateskdbattere');

// -- TANDES --
Route::get('/dashboard/TANDES/PLN',['as' => 'tns_pln', 'uses' =>'DataController@indextnspln']);
Route::get('/dashboard/TANDES/PLN/tambah','DataController@tambahtnspln');
Route::post('/dashboard/TANDES/PLN/store','DataController@storetnspln');
Route::post('/dashboard/TANDES/PLN/update','DataController@updatetnspln');

Route::get('/dashboard/TANDES/AC',['as' => 'tns_ac', 'uses' =>'DataController@indextnsac']);
Route::get('/dashboard/TANDES/AC/tambah','DataController@tambahtnsac');
Route::post('/dashboard/TANDES/AC/store','DataController@storetnsac');
Route::post('/dashboard/TANDES/AC/update','DataController@updatetnsac');

Route::get('/dashboard/TANDES/GENERATOR',['as' => 'tns_generator', 'uses' =>'DataController@indextnsgenerator']);
Route::get('/dashboard/TANDES/GENERATOR/tambah','DataController@tambahtnsgenerator');
Route::post('/dashboard/TANDES/GENERATOR/store','DataController@storetnsgenerator');
Route::post('/dashboard/TANDES/GENERATOR/update','DataController@updatetnsgenerator');

Route::get('/dashboard/TANDES/RECTIFIER',['as' => 'tns_rectifier', 'uses' =>'DataController@indextnsrectifier']);
Route::get('/dashboard/TANDES/RECTIFIER/tambah','DataController@tambahtnsrectifier');
Route::post('/dashboard/TANDES/RECTIFIER/store','DataController@storetnsrectifier');
Route::post('/dashboard/TANDES/RECTIFIER/update','DataController@updatetnsrectifier');

Route::get('/dashboard/TANDES/BATTERE',['as' => 'tns_battere', 'uses' =>'DataController@indextnsbattere']);
Route::get('/dashboard/TANDES/BATTERE/tambah','DataController@tambahtnsbattere');
Route::post('/dashboard/TANDES/BATTERE/store','DataController@storetnsbattere');
Route::post('/dashboard/TANDES/BATTERE/update','DataController@updatetnsbattere');

//================================================== SIDOARJO ================================================//
// -- BEJI --
Route::get('/dashboard/BEJI/PLN',['as' => 'bej_pln', 'uses' =>'DataController@indexbejpln']);
Route::get('/dashboard/BEJI/PLN/tambah','DataController@tambahbejpln');
Route::post('/dashboard/BEJI/PLN/store','DataController@storebejpln');
Route::post('/dashboard/BEJI/PLN/update','DataController@updatebejpln');

Route::get('/dashboard/BEJI/AC',['as' => 'bej_ac', 'uses' =>'DataController@indexbejac']);
Route::get('/dashboard/BEJI/AC/tambah','DataController@tambahbejac');
Route::post('/dashboard/BEJI/AC/store','DataController@storebejac');
Route::post('/dashboard/BEJI/AC/update','DataController@updatebejac');

Route::get('/dashboard/BEJI/GENERATOR',['as' => 'bej_generator', 'uses' =>'DataController@indexbejgenerator']);
Route::get('/dashboard/BEJI/GENERATOR/tambah','DataController@tambahbejgenerator');
Route::post('/dashboard/BEJI/GENERATOR/store','DataController@storebejgenerator');
Route::post('/dashboard/BEJI/GENERATOR/update','DataController@updatebejgenerator');

Route::get('/dashboard/BEJI/RECTIFIER',['as' => 'bej_rectifier', 'uses' =>'DataController@indexbejrectifier']);
Route::get('/dashboard/BEJI/RECTIFIER/tambah','DataController@tambahbejrectifier');
Route::post('/dashboard/BEJI/RECTIFIER/store','DataController@storebejrectifier');
Route::post('/dashboard/BEJI/RECTIFIER/update','DataController@updatebejrectifier');

Route::get('/dashboard/BEJI/BATTERE',['as' => 'bej_battere', 'uses' =>'DataController@indexbejbattere']);
Route::get('/dashboard/BEJI/BATTERE/tambah','DataController@tambahbejbattere');
Route::post('/dashboard/BEJI/BATTERE/store','DataController@storebejbattere');
Route::post('/dashboard/BEJI/BATTERE/update','DataController@updatebejbattere');

// -- DLANGGU --
Route::get('/dashboard/DLANGGU/PLN',['as' => 'dla_pln', 'uses' =>'DataController@indexdlapln']);
Route::get('/dashboard/DLANGGU/PLN/tambah','DataController@tambahdlapln');
Route::post('/dashboard/DLANGGU/PLN/store','DataController@storedlapln');
Route::post('/dashboard/DLANGGU/PLN/update','DataController@updatedlapln');

Route::get('/dashboard/DLANGGU/AC',['as' => 'dla_ac', 'uses' =>'DataController@indexdlaac']);
Route::get('/dashboard/DLANGGU/AC/tambah','DataController@tambahdlaac');
Route::post('/dashboard/DLANGGU/AC/store','DataController@storedlaac');
Route::post('/dashboard/DLANGGU/AC/update','DataController@updatedlaac');

Route::get('/dashboard/DLANGGU/GENERATOR',['as' => 'dla_generator', 'uses' =>'DataController@indexdlagenerator']);
Route::get('/dashboard/DLANGGU/GENERATOR/tambah','DataController@tambahdlagenerator');
Route::post('/dashboard/DLANGGU/GENERATOR/store','DataController@storedlagenerator');
Route::post('/dashboard/DLANGGU/GENERATOR/update','DataController@updatedlagenerator');

Route::get('/dashboard/DLANGGU/RECTIFIER',['as' => 'dla_rectifier', 'uses' =>'DataController@indexdlarectifier']);
Route::get('/dashboard/DLANGGU/RECTIFIER/tambah','DataController@tambahdlarectifier');
Route::post('/dashboard/DLANGGU/RECTIFIER/store','DataController@storedlarectifier');
Route::post('/dashboard/DLANGGU/RECTIFIER/update','DataController@updatedlarectifier');

Route::get('/dashboard/DLANGGU/BATTERE',['as' => 'dla_battere', 'uses' =>'DataController@indexdlabattere']);
Route::get('/dashboard/DLANGGU/BATTERE/tambah','DataController@tambahdlabattere');
Route::post('/dashboard/DLANGGU/BATTERE/store','DataController@storedlabattere');
Route::post('/dashboard/DLANGGU/BATTERE/update','DataController@updatedlabattere');

// -- GEDANGAN --
Route::get('/dashboard/GEDANGAN/PLN',['as' => 'gda_pln', 'uses' =>'DataController@indexgdapln']);
Route::get('/dashboard/GEDANGAN/PLN/tambah','DataController@tambahgdapln');
Route::post('/dashboard/GEDANGAN/PLN/store','DataController@storegdapln');
Route::post('/dashboard/GEDANGAN/PLN/update','DataController@updategdapln');

Route::get('/dashboard/GEDANGAN/AC',['as' => 'gda_ac', 'uses' =>'DataController@indexgdaac']);
Route::get('/dashboard/GEDANGAN/AC/tambah','DataController@tambahgdaac');
Route::post('/dashboard/GEDANGAN/AC/store','DataController@storegdaac');
Route::post('/dashboard/GEDANGAN/AC/update','DataController@updategdaac');

Route::get('/dashboard/GEDANGAN/GENERATOR',['as' => 'gda_generator', 'uses' =>'DataController@indexgdagenerator']);
Route::get('/dashboard/GEDANGAN/GENERATOR/tambah','DataController@tambahgdagenerator');
Route::post('/dashboard/GEDANGAN/GENERATOR/store','DataController@storegdagenerator');
Route::post('/dashboard/GEDANGAN/GENERATOR/update','DataController@updategdagenerator');

Route::get('/dashboard/GEDANGAN/RECTIFIER',['as' => 'gda_rectifier', 'uses' =>'DataController@indexgdarectifier']);
Route::get('/dashboard/GEDANGAN/RECTIFIER/tambah','DataController@tambahgdarectifier');
Route::post('/dashboard/GEDANGAN/RECTIFIER/store','DataController@storegdarectifier');
Route::post('/dashboard/GEDANGAN/RECTIFIER/update','DataController@updategdarectifier');

Route::get('/dashboard/GEDANGAN/BATTERE',['as' => 'gda_battere', 'uses' =>'DataController@indexgdabattere']);
Route::get('/dashboard/GEDANGAN/BATTERE/tambah','DataController@tambahgdabattere');
Route::post('/dashboard/GEDANGAN/BATTERE/store','DataController@storegdabattere');
Route::post('/dashboard/GEDANGAN/BATTERE/update','DataController@updategdabattere');

// -- GEMPOL --
Route::get('/dashboard/GEMPOL/PLN',['as' => 'gem_pln', 'uses' =>'DataController@indexgempln']);
Route::get('/dashboard/GEMPOL/PLN/tambah','DataController@tambahgempln');
Route::post('/dashboard/GEMPOL/PLN/store','DataController@storegempln');
Route::post('/dashboard/GEMPOL/PLN/update','DataController@updategempln');

Route::get('/dashboard/GEMPOL/AC',['as' => 'gem_ac', 'uses' =>'DataController@indexgemac']);
Route::get('/dashboard/GEMPOL/AC/tambah','DataController@tambahgemac');
Route::post('/dashboard/GEMPOL/AC/store','DataController@storegemac');
Route::post('/dashboard/GEMPOL/AC/update','DataController@updategemac');

Route::get('/dashboard/GEMPOL/GENERATOR',['as' => 'gem_generator', 'uses' =>'DataController@indexgemgenerator']);
Route::get('/dashboard/GEMPOL/GENERATOR/tambah','DataController@tambahgemgenerator');
Route::post('/dashboard/GEMPOL/GENERATOR/store','DataController@storegemgenerator');
Route::post('/dashboard/GEMPOL/GENERATOR/update','DataController@updategemgenerator');

Route::get('/dashboard/GEMPOL/RECTIFIER',['as' => 'gem_rectifier', 'uses' =>'DataController@indexgemrectifier']);
Route::get('/dashboard/GEMPOL/RECTIFIER/tambah','DataController@tambahgemrectifier');
Route::post('/dashboard/GEMPOL/RECTIFIER/store','DataController@storegemrectifier');
Route::post('/dashboard/GEMPOL/RECTIFIER/update','DataController@updategemrectifier');

Route::get('/dashboard/GEMPOL/BATTERE',['as' => 'gem_battere', 'uses' =>'DataController@indexgembattere']);
Route::get('/dashboard/GEMPOL/BATTERE/tambah','DataController@tambahgembattere');
Route::post('/dashboard/GEMPOL/BATTERE/store','DataController@storegembattere');
Route::post('/dashboard/GEMPOL/BATTERE/update','DataController@updategembattere');

// -- JOMBANG --
Route::get('/dashboard/JOMBANG/PLN',['as' => 'jom_pln', 'uses' =>'DataController@indexjompln']);
Route::get('/dashboard/JOMBANG/PLN/tambah','DataController@tambahjompln');
Route::post('/dashboard/JOMBANG/PLN/store','DataController@storejompln');
Route::post('/dashboard/JOMBANG/PLN/update','DataController@updatejompln');

Route::get('/dashboard/JOMBANG/AC',['as' => 'jom_ac', 'uses' =>'DataController@indexjomac']);
Route::get('/dashboard/JOMBANG/AC/tambah','DataController@tambahjomac');
Route::post('/dashboard/JOMBANG/AC/store','DataController@storejomac');
Route::post('/dashboard/JOMBANG/AC/update','DataController@updatejomac');

Route::get('/dashboard/JOMBANG/GENERATOR',['as' => 'jom_generator', 'uses' =>'DataController@indexjomgenerator']);
Route::get('/dashboard/JOMBANG/GENERATOR/tambah','DataController@tambahjomgenerator');
Route::post('/dashboard/JOMBANG/GENERATOR/store','DataController@storejomgenerator');
Route::post('/dashboard/JOMBANG/GENERATOR/update','DataController@updatejomgenerator');

Route::get('/dashboard/JOMBANG/RECTIFIER',['as' => 'jom_rectifier', 'uses' =>'DataController@indexjomrectifier']);
Route::get('/dashboard/JOMBANG/RECTIFIER/tambah','DataController@tambahjomrectifier');
Route::post('/dashboard/JOMBANG/RECTIFIER/store','DataController@storejomrectifier');
Route::post('/dashboard/JOMBANG/RECTIFIER/update','DataController@updatejomrectifier');

Route::get('/dashboard/JOMBANG/BATTERE',['as' => 'jom_battere', 'uses' =>'DataController@indexjombattere']);
Route::get('/dashboard/JOMBANG/BATTERE/tambah','DataController@tambahjombattere');
Route::post('/dashboard/JOMBANG/BATTERE/store','DataController@storejombattere');
Route::post('/dashboard/JOMBANG/BATTERE/update','DataController@updatejombattere');

// -- KRIAN --
Route::get('/dashboard/KRIAN/PLN',['as' => 'krn_pln', 'uses' =>'DataController@indexkrnpln']);
Route::get('/dashboard/KRIAN/PLN/tambah','DataController@tambahkrnpln');
Route::post('/dashboard/KRIAN/PLN/store','DataController@storekrnpln');
Route::post('/dashboard/KRIAN/PLN/update','DataController@updatekrnpln');

Route::get('/dashboard/KRIAN/AC',['as' => 'krn_ac', 'uses' =>'DataController@indexkrnac']);
Route::get('/dashboard/KRIAN/AC/tambah','DataController@tambahkrnac');
Route::post('/dashboard/KRIAN/AC/store','DataController@storekrnac');
Route::post('/dashboard/KRIAN/AC/update','DataController@updatekrnac');

Route::get('/dashboard/KRIAN/GENERATOR',['as' => 'krn_generator', 'uses' =>'DataController@indexkrngenerator']);
Route::get('/dashboard/KRIAN/GENERATOR/tambah','DataController@tambahkrngenerator');
Route::post('/dashboard/KRIAN/GENERATOR/store','DataController@storekrngenerator');
Route::post('/dashboard/KRIAN/GENERATOR/update','DataController@updatekrngenerator');

Route::get('/dashboard/KRIAN/RECTIFIER',['as' => 'krn_rectifier', 'uses' =>'DataController@indexkrnrectifier']);
Route::get('/dashboard/KRIAN/RECTIFIER/tambah','DataController@tambahkrnrectifier');
Route::post('/dashboard/KRIAN/RECTIFIER/store','DataController@storekrnrectifier');
Route::post('/dashboard/KRIAN/RECTIFIER/update','DataController@updatekrnrectifier');

Route::get('/dashboard/KRIAN/BATTERE',['as' => 'krn_battere', 'uses' =>'DataController@indexkrnbattere']);
Route::get('/dashboard/KRIAN/BATTERE/tambah','DataController@tambahkrnbattere');
Route::post('/dashboard/KRIAN/BATTERE/store','DataController@storekrnbattere');
Route::post('/dashboard/KRIAN/BATTERE/update','DataController@updatekrnbattere');

// -- MLIRIP --
Route::get('/dashboard/MLIRIP/PLN',['as' => 'mip_pln', 'uses' =>'DataController@indexmippln']);
Route::get('/dashboard/MLIRIP/PLN/tambah','DataController@tambahmippln');
Route::post('/dashboard/MLIRIP/PLN/store','DataController@storemippln');
Route::post('/dashboard/MLIRIP/PLN/update','DataController@updatemippln');

Route::get('/dashboard/MLIRIP/AC',['as' => 'mip_ac', 'uses' =>'DataController@indexmipac']);
Route::get('/dashboard/MLIRIP/AC/tambah','DataController@tambahmipac');
Route::post('/dashboard/MLIRIP/AC/store','DataController@storemipac');
Route::post('/dashboard/MLIRIP/AC/update','DataController@updatemipac');

Route::get('/dashboard/MLIRIP/GENERATOR',['as' => 'mip_generator', 'uses' =>'DataController@indexmipgenerator']);
Route::get('/dashboard/MLIRIP/GENERATOR/tambah','DataController@tambahmipgenerator');
Route::post('/dashboard/MLIRIP/GENERATOR/store','DataController@storemipgenerator');
Route::post('/dashboard/MLIRIP/GENERATOR/update','DataController@updatemipgenerator');

Route::get('/dashboard/MLIRIP/RECTIFIER',['as' => 'mip_rectifier', 'uses' =>'DataController@indexmiprectifier']);
Route::get('/dashboard/MLIRIP/RECTIFIER/tambah','DataController@tambahmiprectifier');
Route::post('/dashboard/MLIRIP/RECTIFIER/store','DataController@storemiprectifier');
Route::post('/dashboard/MLIRIP/RECTIFIER/update','DataController@updatemiprectifier');

Route::get('/dashboard/MLIRIP/BATTERE',['as' => 'mip_battere', 'uses' =>'DataController@indexmipbattere']);
Route::get('/dashboard/MLIRIP/BATTERE/tambah','DataController@tambahmipbattere');
Route::post('/dashboard/MLIRIP/BATTERE/store','DataController@storemipbattere');
Route::post('/dashboard/MLIRIP/BATTERE/update','DataController@updatemipbattere');

// -- MOJOSARI --
Route::get('/dashboard/MOJOSARI/PLN',['as' => 'mjs_pln', 'uses' =>'DataController@indexmjspln']);
Route::get('/dashboard/MOJOSARI/PLN/tambah','DataController@tambahmjspln');
Route::post('/dashboard/MOJOSARI/PLN/store','DataController@storemjspln');
Route::post('/dashboard/MOJOSARI/PLN/update','DataController@updatemjspln');

Route::get('/dashboard/MOJOSARI/AC',['as' => 'mjs_ac', 'uses' =>'DataController@indexmjsac']);
Route::get('/dashboard/MOJOSARI/AC/tambah','DataController@tambahmjsac');
Route::post('/dashboard/MOJOSARI/AC/store','DataController@storemjsac');
Route::post('/dashboard/MOJOSARI/AC/update','DataController@updatemjsac');

Route::get('/dashboard/MOJOSARI/GENERATOR',['as' => 'mjs_generator', 'uses' =>'DataController@indexmjsgenerator']);
Route::get('/dashboard/MOJOSARI/GENERATOR/tambah','DataController@tambahmjsgenerator');
Route::post('/dashboard/MOJOSARI/GENERATOR/store','DataController@storemjsgenerator');
Route::post('/dashboard/MOJOSARI/GENERATOR/update','DataController@updatemjsgenerator');

Route::get('/dashboard/MOJOSARI/RECTIFIER',['as' => 'mjs_rectifier', 'uses' =>'DataController@indexmjsrectifier']);
Route::get('/dashboard/MOJOSARI/RECTIFIER/tambah','DataController@tambahmjsrectifier');
Route::post('/dashboard/MOJOSARI/RECTIFIER/store','DataController@storemjsrectifier');
Route::post('/dashboard/MOJOSARI/RECTIFIER/update','DataController@updatemjsrectifier');

Route::get('/dashboard/MOJOSARI/BATTERE',['as' => 'mjs_battere', 'uses' =>'DataController@indexmjsbattere']);
Route::get('/dashboard/MOJOSARI/BATTERE/tambah','DataController@tambahmjsbattere');
Route::post('/dashboard/MOJOSARI/BATTERE/store','DataController@storemjsbattere');
Route::post('/dashboard/MOJOSARI/BATTERE/update','DataController@updatemjsbattere');

// -- MOJOAGUNG --
Route::get('/dashboard/MOJOAGUNG/PLN',['as' => 'moj_pln', 'uses' =>'DataController@indexmojpln']);
Route::get('/dashboard/MOJOAGUNG/PLN/tambah','DataController@tambahmojpln');
Route::post('/dashboard/MOJOAGUNG/PLN/store','DataController@storemojpln');
Route::post('/dashboard/MOJOAGUNG/PLN/update','DataController@updatemojpln');

Route::get('/dashboard/MOJOAGUNG/AC',['as' => 'moj_ac', 'uses' =>'DataController@indexmojac']);
Route::get('/dashboard/MOJOAGUNG/AC/tambah','DataController@tambahmojac');
Route::post('/dashboard/MOJOAGUNG/AC/store','DataController@storemojac');
Route::post('/dashboard/MOJOAGUNG/AC/update','DataController@updatemojac');

Route::get('/dashboard/MOJOAGUNG/GENERATOR',['as' => 'moj_generator', 'uses' =>'DataController@indexmojgenerator']);
Route::get('/dashboard/MOJOAGUNG/GENERATOR/tambah','DataController@tambahmojgenerator');
Route::post('/dashboard/MOJOAGUNG/GENERATOR/store','DataController@storemojgenerator');
Route::post('/dashboard/MOJOAGUNG/GENERATOR/update','DataController@updatemojgenerator');

Route::get('/dashboard/MOJOAGUNG/RECTIFIER',['as' => 'moj_rectifier', 'uses' =>'DataController@indexmojrectifier']);
Route::get('/dashboard/MOJOAGUNG/RECTIFIER/tambah','DataController@tambahmojrectifier');
Route::post('/dashboard/MOJOAGUNG/RECTIFIER/store','DataController@storemojrectifier');
Route::post('/dashboard/MOJOAGUNG/RECTIFIER/update','DataController@updatemojrectifier');

Route::get('/dashboard/MOJOAGUNG/BATTERE',['as' => 'moj_battere', 'uses' =>'DataController@indexmojbattere']);
Route::get('/dashboard/MOJOAGUNG/BATTERE/tambah','DataController@tambahmojbattere');
Route::post('/dashboard/MOJOAGUNG/BATTERE/store','DataController@storemojbattere');
Route::post('/dashboard/MOJOAGUNG/BATTERE/update','DataController@updatemojbattere');

// -- MOJOKERTO --
Route::get('/dashboard/MOJOKERTO/PLN',['as' => 'mrt_pln', 'uses' =>'DataController@indexmrtpln']);
Route::get('/dashboard/MOJOKERTO/PLN/tambah','DataController@tambahmrtpln');
Route::post('/dashboard/MOJOKERTO/PLN/store','DataController@storemrtpln');
Route::post('/dashboard/MOJOKERTO/PLN/update','DataController@updatemrtpln');

Route::get('/dashboard/MOJOKERTO/AC',['as' => 'mrt_ac', 'uses' =>'DataController@indexmrtac']);
Route::get('/dashboard/MOJOKERTO/AC/tambah','DataController@tambahmrtac');
Route::post('/dashboard/MOJOKERTO/AC/store','DataController@storemrtac');
Route::post('/dashboard/MOJOKERTO/AC/update','DataController@updatemrtac');

Route::get('/dashboard/MOJOKERTO/GENERATOR',['as' => 'mrt_generator', 'uses' =>'DataController@indexmrtgenerator']);
Route::get('/dashboard/MOJOKERTO/GENERATOR/tambah','DataController@tambahmrtgenerator');
Route::post('/dashboard/MOJOKERTO/GENERATOR/store','DataController@storemrtgenerator');
Route::post('/dashboard/MOJOKERTO/GENERATOR/update','DataController@updatemrtgenerator');

Route::get('/dashboard/MOJOKERTO/RECTIFIER',['as' => 'mrt_rectifier', 'uses' =>'DataController@indexmrtrectifier']);
Route::get('/dashboard/MOJOKERTO/RECTIFIER/tambah','DataController@tambahmrtrectifier');
Route::post('/dashboard/MOJOKERTO/RECTIFIER/store','DataController@storemrtrectifier');
Route::post('/dashboard/MOJOKERTO/RECTIFIER/update','DataController@updatemrtrectifier');

Route::get('/dashboard/MOJOKERTO/BATTERE',['as' => 'mrt_battere', 'uses' =>'DataController@indexmrtbattere']);
Route::get('/dashboard/MOJOKERTO/BATTERE/tambah','DataController@tambahmrtbattere');
Route::post('/dashboard/MOJOKERTO/BATTERE/store','DataController@storemrtbattere');
Route::post('/dashboard/MOJOKERTO/BATTERE/update','DataController@updatemrtbattere');

// -- NGORO INDUSTRI --
Route::get('/dashboard/NGORO INDUSTRI/PLN',['as' => 'ngi_pln', 'uses' =>'DataController@indexngipln']);
Route::get('/dashboard/NGORO INDUSTRI/PLN/tambah','DataController@tambahngipln');
Route::post('/dashboard/NGORO INDUSTRI/PLN/store','DataController@storengipln');
Route::post('/dashboard/NGORO INDUSTRI/PLN/update','DataController@updatengipln');

Route::get('/dashboard/NGORO INDUSTRI/AC',['as' => 'ngi_ac', 'uses' =>'DataController@indexngiac']);
Route::get('/dashboard/NGORO INDUSTRI/AC/tambah','DataController@tambahngiac');
Route::post('/dashboard/NGORO INDUSTRI/AC/store','DataController@storengiac');
Route::post('/dashboard/NGORO INDUSTRI/AC/update','DataController@updatengiac');

Route::get('/dashboard/NGORO INDUSTRI/GENERATOR',['as' => 'ngi_generator', 'uses' =>'DataController@indexngigenerator']);
Route::get('/dashboard/NGORO INDUSTRI/GENERATOR/tambah','DataController@tambahngigenerator');
Route::post('/dashboard/NGORO INDUSTRI/GENERATOR/store','DataController@storengigenerator');
Route::post('/dashboard/NGORO INDUSTRI/GENERATOR/update','DataController@updatengigenerator');

Route::get('/dashboard/NGORO INDUSTRI/RECTIFIER',['as' => 'ngi_rectifier', 'uses' =>'DataController@indexngirectifier']);
Route::get('/dashboard/NGORO INDUSTRI/RECTIFIER/tambah','DataController@tambahngirectifier');
Route::post('/dashboard/NGORO INDUSTRI/RECTIFIER/store','DataController@storengirectifier');
Route::post('/dashboard/NGORO INDUSTRI/RECTIFIER/update','DataController@updatengirectifier');

Route::get('/dashboard/NGORO INDUSTRI/BATTERE',['as' => 'ngi_battere', 'uses' =>'DataController@indexngibattere']);
Route::get('/dashboard/NGORO INDUSTRI/BATTERE/tambah','DataController@tambahngibattere');
Route::post('/dashboard/NGORO INDUSTRI/BATTERE/store','DataController@storengibattere');
Route::post('/dashboard/NGORO INDUSTRI/BATTERE/update','DataController@updatengibattere');

// -- NGORO JOMBANG --
Route::get('/dashboard/NGORO JOMBANG/PLN',['as' => 'nrj_pln', 'uses' =>'DataController@indexnrjpln']);
Route::get('/dashboard/NGORO JOMBANG/PLN/tambah','DataController@tambahnrjpln');
Route::post('/dashboard/NGORO JOMBANG/PLN/store','DataController@storenrjpln');
Route::post('/dashboard/NGORO JOMBANG/PLN/update','DataController@updatenrjpln');

Route::get('/dashboard/NGORO JOMBANG/AC',['as' => 'nrj_ac', 'uses' =>'DataController@indexnrjac']);
Route::get('/dashboard/NGORO JOMBANG/AC/tambah','DataController@tambahnrjac');
Route::post('/dashboard/NGORO JOMBANG/AC/store','DataController@storenrjac');
Route::post('/dashboard/NGORO JOMBANG/AC/update','DataController@updatenrjac');

Route::get('/dashboard/NGORO JOMBANG/GENERATOR',['as' => 'nrj_generator', 'uses' =>'DataController@indexnrjgenerator']);
Route::get('/dashboard/NGORO JOMBANG/GENERATOR/tambah','DataController@tambahnrjgenerator');
Route::post('/dashboard/NGORO JOMBANG/GENERATOR/store','DataController@storenrjgenerator');
Route::post('/dashboard/NGORO JOMBANG/GENERATOR/update','DataController@updatenrjgenerator');

Route::get('/dashboard/NGORO JOMBANG/RECTIFIER',['as' => 'nrj_rectifier', 'uses' =>'DataController@indexnrjrectifier']);
Route::get('/dashboard/NGORO JOMBANG/RECTIFIER/tambah','DataController@tambahnrjrectifier');
Route::post('/dashboard/NGORO JOMBANG/RECTIFIER/store','DataController@storenrjrectifier');
Route::post('/dashboard/NGORO JOMBANG/RECTIFIER/update','DataController@updatenrjrectifier');

Route::get('/dashboard/NGORO JOMBANG/BATTERE',['as' => 'nrj_battere', 'uses' =>'DataController@indexnrjbattere']);
Route::get('/dashboard/NGORO JOMBANG/BATTERE/tambah','DataController@tambahnrjbattere');
Route::post('/dashboard/NGORO JOMBANG/BATTERE/store','DataController@storenrjbattere');
Route::post('/dashboard/NGORO JOMBANG/BATTERE/update','DataController@updatenrjbattere');

// -- PACET --
Route::get('/dashboard/PACET/PLN',['as' => 'pct_pln', 'uses' =>'DataController@indexpctpln']);
Route::get('/dashboard/PACET/PLN/tambah','DataController@tambahpctpln');
Route::post('/dashboard/PACET/PLN/store','DataController@storepctpln');
Route::post('/dashboard/PACET/PLN/update','DataController@updatepctpln');

Route::get('/dashboard/PACET/AC',['as' => 'pct_ac', 'uses' =>'DataController@indexpctac']);
Route::get('/dashboard/PACET/AC/tambah','DataController@tambahpctac');
Route::post('/dashboard/PACET/AC/store','DataController@storepctac');
Route::post('/dashboard/PACET/AC/update','DataController@updatepctac');

Route::get('/dashboard/PACET/GENERATOR',['as' => 'pct_generator', 'uses' =>'DataController@indexpctgenerator']);
Route::get('/dashboard/PACET/GENERATOR/tambah','DataController@tambahpctgenerator');
Route::post('/dashboard/PACET/GENERATOR/store','DataController@storepctgenerator');
Route::post('/dashboard/PACET/GENERATOR/update','DataController@updatepctgenerator');

Route::get('/dashboard/PACET/RECTIFIER',['as' => 'pct_rectifier', 'uses' =>'DataController@indexpctrectifier']);
Route::get('/dashboard/PACET/RECTIFIER/tambah','DataController@tambahpctrectifier');
Route::post('/dashboard/PACET/RECTIFIER/store','DataController@storepctrectifier');
Route::post('/dashboard/PACET/RECTIFIER/update','DataController@updatepctrectifier');

Route::get('/dashboard/PACET/BATTERE',['as' => 'pct_battere', 'uses' =>'DataController@indexpctbattere']);
Route::get('/dashboard/PACET/BATTERE/tambah','DataController@tambahpctbattere');
Route::post('/dashboard/PACET/BATTERE/store','DataController@storepctbattere');
Route::post('/dashboard/PACET/BATTERE/update','DataController@updatepctbattere');

// -- PANDAAN --
Route::get('/dashboard/PANDAAN/PLN',['as' => 'pda_pln', 'uses' =>'DataController@indexpdapln']);
Route::get('/dashboard/PANDAAN/PLN/tambah','DataController@tambahpdapln');
Route::post('/dashboard/PANDAAN/PLN/store','DataController@storepdapln');
Route::post('/dashboard/PANDAAN/PLN/update','DataController@updatepdapln');

Route::get('/dashboard/PANDAAN/AC',['as' => 'pda_ac', 'uses' =>'DataController@indexpdaac']);
Route::get('/dashboard/PANDAAN/AC/tambah','DataController@tambahpdaac');
Route::post('/dashboard/PANDAAN/AC/store','DataController@storepdaac');
Route::post('/dashboard/PANDAAN/AC/update','DataController@updatepdaac');

Route::get('/dashboard/PANDAAN/GENERATOR',['as' => 'pda_generator', 'uses' =>'DataController@indexpdagenerator']);
Route::get('/dashboard/PANDAAN/GENERATOR/tambah','DataController@tambahpdagenerator');
Route::post('/dashboard/PANDAAN/GENERATOR/store','DataController@storepdagenerator');
Route::post('/dashboard/PANDAAN/GENERATOR/update','DataController@updatepdagenerator');

Route::get('/dashboard/PANDAAN/RECTIFIER',['as' => 'pda_rectifier', 'uses' =>'DataController@indexpdarectifier']);
Route::get('/dashboard/PANDAAN/RECTIFIER/tambah','DataController@tambahpdarectifier');
Route::post('/dashboard/PANDAAN/RECTIFIER/store','DataController@storepdarectifier');
Route::post('/dashboard/PANDAAN/RECTIFIER/update','DataController@updatepdarectifier');

Route::get('/dashboard/PANDAAN/BATTERE',['as' => 'pda_battere', 'uses' =>'DataController@indexpdabattere']);
Route::get('/dashboard/PANDAAN/BATTERE/tambah','DataController@tambahpdabattere');
Route::post('/dashboard/PANDAAN/BATTERE/store','DataController@storepdabattere');
Route::post('/dashboard/PANDAAN/BATTERE/update','DataController@updatepdabattere');

// -- PRIGEN --
Route::get('/dashboard/PRIGEN/PLN',['as' => 'pge_pln', 'uses' =>'DataController@indexpgepln']);
Route::get('/dashboard/PRIGEN/PLN/tambah','DataController@tambahpgepln');
Route::post('/dashboard/PRIGEN/PLN/store','DataController@storepgepln');
Route::post('/dashboard/PRIGEN/PLN/update','DataController@updatepgepln');

Route::get('/dashboard/PRIGEN/AC',['as' => 'pge_ac', 'uses' =>'DataController@indexpgeac']);
Route::get('/dashboard/PRIGEN/AC/tambah','DataController@tambahpgeac');
Route::post('/dashboard/PRIGEN/AC/store','DataController@storepgeac');
Route::post('/dashboard/PRIGEN/AC/update','DataController@updatepgeac');

Route::get('/dashboard/PRIGEN/GENERATOR',['as' => 'pge_generator', 'uses' =>'DataController@indexpgegenerator']);
Route::get('/dashboard/PRIGEN/GENERATOR/tambah','DataController@tambahpgegenerator');
Route::post('/dashboard/PRIGEN/GENERATOR/store','DataController@storepgegenerator');
Route::post('/dashboard/PRIGEN/GENERATOR/update','DataController@updatepgegenerator');

Route::get('/dashboard/PRIGEN/RECTIFIER',['as' => 'pge_rectifier', 'uses' =>'DataController@indexpgerectifier']);
Route::get('/dashboard/PRIGEN/RECTIFIER/tambah','DataController@tambahpgerectifier');
Route::post('/dashboard/PRIGEN/RECTIFIER/store','DataController@storepgerectifier');
Route::post('/dashboard/PRIGEN/RECTIFIER/update','DataController@updatepgerectifier');

Route::get('/dashboard/PRIGEN/BATTERE',['as' => 'pge_battere', 'uses' =>'DataController@indexpgebattere']);
Route::get('/dashboard/PRIGEN/BATTERE/tambah','DataController@tambahpgebattere');
Route::post('/dashboard/PRIGEN/BATTERE/store','DataController@storepgebattere');
Route::post('/dashboard/PRIGEN/BATTERE/update','DataController@updatepgebattere');

// -- PLOSO --
Route::get('/dashboard/PLOSO/PLN',['as' => 'pos_pln', 'uses' =>'DataController@indexpospln']);
Route::get('/dashboard/PLOSO/PLN/tambah','DataController@tambahpospln');
Route::post('/dashboard/PLOSO/PLN/store','DataController@storepospln');
Route::post('/dashboard/PLOSO/PLN/update','DataController@updatepospln');

Route::get('/dashboard/PLOSO/AC',['as' => 'pos_ac', 'uses' =>'DataController@indexposac']);
Route::get('/dashboard/PLOSO/AC/tambah','DataController@tambahposac');
Route::post('/dashboard/PLOSO/AC/store','DataController@storeposac');
Route::post('/dashboard/PLOSO/AC/update','DataController@updateposac');

Route::get('/dashboard/PLOSO/GENERATOR',['as' => 'pos_generator', 'uses' =>'DataController@indexposgenerator']);
Route::get('/dashboard/PLOSO/GENERATOR/tambah','DataController@tambahposgenerator');
Route::post('/dashboard/PLOSO/GENERATOR/store','DataController@storeposgenerator');
Route::post('/dashboard/PLOSO/GENERATOR/update','DataController@updateposgenerator');

Route::get('/dashboard/PLOSO/RECTIFIER',['as' => 'pos_rectifier', 'uses' =>'DataController@indexposrectifier']);
Route::get('/dashboard/PLOSO/RECTIFIER/tambah','DataController@tambahposrectifier');
Route::post('/dashboard/PLOSO/RECTIFIER/store','DataController@storeposrectifier');
Route::post('/dashboard/PLOSO/RECTIFIER/update','DataController@updateposrectifier');

Route::get('/dashboard/PLOSO/BATTERE',['as' => 'pos_battere', 'uses' =>'DataController@indexposbattere']);
Route::get('/dashboard/PLOSO/BATTERE/tambah','DataController@tambahposbattere');
Route::post('/dashboard/PLOSO/BATTERE/store','DataController@storeposbattere');
Route::post('/dashboard/PLOSO/BATTERE/update','DataController@updateposbattere');

// -- PURWOSARI --
Route::get('/dashboard/PURWOSARI/PLN',['as' => 'pws_pln', 'uses' =>'DataController@indexpwspln']);
Route::get('/dashboard/PURWOSARI/PLN/tambah','DataController@tambahpwspln');
Route::post('/dashboard/PURWOSARI/PLN/store','DataController@storepwspln');
Route::post('/dashboard/PURWOSARI/PLN/update','DataController@updatepwspln');

Route::get('/dashboard/PURWOSARI/AC',['as' => 'pws_ac', 'uses' =>'DataController@indexpwsac']);
Route::get('/dashboard/PURWOSARI/AC/tambah','DataController@tambahpwsac');
Route::post('/dashboard/PURWOSARI/AC/store','DataController@storepwsac');
Route::post('/dashboard/PURWOSARI/AC/update','DataController@updatepwsac');

Route::get('/dashboard/PURWOSARI/GENERATOR',['as' => 'pws_generator', 'uses' =>'DataController@indexpwsgenerator']);
Route::get('/dashboard/PURWOSARI/GENERATOR/tambah','DataController@tambahpwsgenerator');
Route::post('/dashboard/PURWOSARI/GENERATOR/store','DataController@storepwsgenerator');
Route::post('/dashboard/PURWOSARI/GENERATOR/update','DataController@updatepwsgenerator');

Route::get('/dashboard/PURWOSARI/RECTIFIER',['as' => 'pws_rectifier', 'uses' =>'DataController@indexpwsrectifier']);
Route::get('/dashboard/PURWOSARI/RECTIFIER/tambah','DataController@tambahpwsrectifier');
Route::post('/dashboard/PURWOSARI/RECTIFIER/store','DataController@storepwsrectifier');
Route::post('/dashboard/PURWOSARI/RECTIFIER/update','DataController@updatepwsrectifier');

Route::get('/dashboard/PURWOSARI/BATTERE',['as' => 'pws_battere', 'uses' =>'DataController@indexpwsbattere']);
Route::get('/dashboard/PURWOSARI/BATTERE/tambah','DataController@tambahpwsbattere');
Route::post('/dashboard/PURWOSARI/BATTERE/store','DataController@storepwsbattere');
Route::post('/dashboard/PURWOSARI/BATTERE/update','DataController@updatepwsbattere');

// -- SIDOARJO --
Route::get('/dashboard/SIDOARJO/PLN',['as' => 'sda_pln', 'uses' =>'DataController@indexsdapln']);
Route::get('/dashboard/SIDOARJO/PLN/tambah','DataController@tambahsdapln');
Route::post('/dashboard/SIDOARJO/PLN/store','DataController@storesdapln');
Route::post('/dashboard/SIDOARJO/PLN/update','DataController@updatesdapln');

Route::get('/dashboard/SIDOARJO/AC',['as' => 'sda_ac', 'uses' =>'DataController@indexsdaac']);
Route::get('/dashboard/SIDOARJO/AC/tambah','DataController@tambahsdaac');
Route::post('/dashboard/SIDOARJO/AC/store','DataController@storesdaac');
Route::post('/dashboard/SIDOARJO/AC/update','DataController@updatesdaac');

Route::get('/dashboard/SIDOARJO/GENERATOR',['as' => 'sda_generator', 'uses' =>'DataController@indexsdagenerator']);
Route::get('/dashboard/SIDOARJO/GENERATOR/tambah','DataController@tambahsdagenerator');
Route::post('/dashboard/SIDOARJO/GENERATOR/store','DataController@storesdagenerator');
Route::post('/dashboard/SIDOARJO/GENERATOR/update','DataController@updatesdagenerator');

Route::get('/dashboard/SIDOARJO/RECTIFIER',['as' => 'sda_rectifier', 'uses' =>'DataController@indexsdarectifier']);
Route::get('/dashboard/SIDOARJO/RECTIFIER/tambah','DataController@tambahsdarectifier');
Route::post('/dashboard/SIDOARJO/RECTIFIER/store','DataController@storesdarectifier');
Route::post('/dashboard/SIDOARJO/RECTIFIER/update','DataController@updatesdarectifier');

Route::get('/dashboard/SIDOARJO/BATTERE',['as' => 'sda_battere', 'uses' =>'DataController@indexsdabattere']);
Route::get('/dashboard/SIDOARJO/BATTERE/tambah','DataController@tambahsdabattere');
Route::post('/dashboard/SIDOARJO/BATTERE/store','DataController@storesdabattere');
Route::post('/dashboard/SIDOARJO/BATTERE/update','DataController@updatesdabattere');

// -- SUKODONO --
Route::get('/dashboard/SUKODONO/PLN',['as' => 'sdn_pln', 'uses' =>'DataController@indexsdnpln']);
Route::get('/dashboard/SUKODONO/PLN/tambah','DataController@tambahsdnpln');
Route::post('/dashboard/SUKODONO/PLN/store','DataController@storesdnpln');
Route::post('/dashboard/SUKODONO/PLN/update','DataController@updatesdnpln');

Route::get('/dashboard/SUKODONO/AC',['as' => 'sdn_ac', 'uses' =>'DataController@indexsdnac']);
Route::get('/dashboard/SUKODONO/AC/tambah','DataController@tambahsdnac');
Route::post('/dashboard/SUKODONO/AC/store','DataController@storesdnac');
Route::post('/dashboard/SUKODONO/AC/update','DataController@updatesdnac');

Route::get('/dashboard/SUKODONO/GENERATOR',['as' => 'sdn_generator', 'uses' =>'DataController@indexsdngenerator']);
Route::get('/dashboard/SUKODONO/GENERATOR/tambah','DataController@tambahsdngenerator');
Route::post('/dashboard/SUKODONO/GENERATOR/store','DataController@storesdngenerator');
Route::post('/dashboard/SUKODONO/GENERATOR/update','DataController@updatesdngenerator');

Route::get('/dashboard/SUKODONO/RECTIFIER',['as' => 'sdn_rectifier', 'uses' =>'DataController@indexsdnrectifier']);
Route::get('/dashboard/SUKODONO/RECTIFIER/tambah','DataController@tambahsdnrectifier');
Route::post('/dashboard/SUKODONO/RECTIFIER/store','DataController@storesdnrectifier');
Route::post('/dashboard/SUKODONO/RECTIFIER/update','DataController@updatesdnrectifier');

Route::get('/dashboard/SUKODONO/BATTERE',['as' => 'sdn_battere', 'uses' =>'DataController@indexsdnbattere']);
Route::get('/dashboard/SUKODONO/BATTERE/tambah','DataController@tambahsdnbattere');
Route::post('/dashboard/SUKODONO/BATTERE/store','DataController@storesdnbattere');
Route::post('/dashboard/SUKODONO/BATTERE/update','DataController@updatesdnbattere');

// -- SEPANJANG --
Route::get('/dashboard/SEPANJANG/PLN',['as' => 'spj_pln', 'uses' =>'DataController@indexspjpln']);
Route::get('/dashboard/SEPANJANG/PLN/tambah','DataController@tambahspjpln');
Route::post('/dashboard/SEPANJANG/PLN/store','DataController@storespjpln');
Route::post('/dashboard/SEPANJANG/PLN/update','DataController@updatespjpln');

Route::get('/dashboard/SEPANJANG/AC',['as' => 'spj_ac', 'uses' =>'DataController@indexspjac']);
Route::get('/dashboard/SEPANJANG/AC/tambah','DataController@tambahspjac');
Route::post('/dashboard/SEPANJANG/AC/store','DataController@storespjac');
Route::post('/dashboard/SEPANJANG/AC/update','DataController@updatespjac');

Route::get('/dashboard/SEPANJANG/GENERATOR',['as' => 'spj_generator', 'uses' =>'DataController@indexspjgenerator']);
Route::get('/dashboard/SEPANJANG/GENERATOR/tambah','DataController@tambahspjgenerator');
Route::post('/dashboard/SEPANJANG/GENERATOR/store','DataController@storespjgenerator');
Route::post('/dashboard/SEPANJANG/GENERATOR/update','DataController@updatespjgenerator');

Route::get('/dashboard/SEPANJANG/RECTIFIER',['as' => 'spj_rectifier', 'uses' =>'DataController@indexspjrectifier']);
Route::get('/dashboard/SEPANJANG/RECTIFIER/tambah','DataController@tambahspjrectifier');
Route::post('/dashboard/SEPANJANG/RECTIFIER/store','DataController@storespjrectifier');
Route::post('/dashboard/SEPANJANG/RECTIFIER/update','DataController@updatespjrectifier');

Route::get('/dashboard/SEPANJANG/BATTERE',['as' => 'spj_battere', 'uses' =>'DataController@indexspjbattere']);
Route::get('/dashboard/SEPANJANG/BATTERE/tambah','DataController@tambahspjbattere');
Route::post('/dashboard/SEPANJANG/BATTERE/store','DataController@storespjbattere');
Route::post('/dashboard/SEPANJANG/BATTERE/update','DataController@updatespjbattere');

// -- TULANGAN --
Route::get('/dashboard/TULANGAN/PLN',['as' => 'tun_pln', 'uses' =>'DataController@indextunpln']);
Route::get('/dashboard/TULANGAN/PLN/tambah','DataController@tambahtunpln');
Route::post('/dashboard/TULANGAN/PLN/store','DataController@storetunpln');
Route::post('/dashboard/TULANGAN/PLN/update','DataController@updatetunpln');

Route::get('/dashboard/TULANGAN/AC',['as' => 'tun_ac', 'uses' =>'DataController@indextunac']);
Route::get('/dashboard/TULANGAN/AC/tambah','DataController@tambahtunac');
Route::post('/dashboard/TULANGAN/AC/store','DataController@storetunac');
Route::post('/dashboard/TULANGAN/AC/update','DataController@updatetunac');

Route::get('/dashboard/TULANGAN/GENERATOR',['as' => 'tun_generator', 'uses' =>'DataController@indextungenerator']);
Route::get('/dashboard/TULANGAN/GENERATOR/tambah','DataController@tambahtungenerator');
Route::post('/dashboard/TULANGAN/GENERATOR/store','DataController@storetungenerator');
Route::post('/dashboard/TULANGAN/GENERATOR/update','DataController@updatetungenerator');

Route::get('/dashboard/TULANGAN/RECTIFIER',['as' => 'tun_rectifier', 'uses' =>'DataController@indextunrectifier']);
Route::get('/dashboard/TULANGAN/RECTIFIER/tambah','DataController@tambahtunrectifier');
Route::post('/dashboard/TULANGAN/RECTIFIER/store','DataController@storetunrectifier');
Route::post('/dashboard/TULANGAN/RECTIFIER/update','DataController@updatetunrectifier');

Route::get('/dashboard/TULANGAN/BATTERE',['as' => 'tun_battere', 'uses' =>'DataController@indextunbattere']);
Route::get('/dashboard/TULANGAN/BATTERE/tambah','DataController@tambahtunbattere');
Route::post('/dashboard/TULANGAN/BATTERE/store','DataController@storetunbattere');
Route::post('/dashboard/TULANGAN/BATTERE/update','DataController@updatetunbattere');

//================================================== SINGARAJA ================================================//
// -- AMLAPURA --
Route::get('/dashboard/AMLAPURA/PLN',['as' => 'apr_pln', 'uses' =>'DataController@indexaprpln']);
Route::get('/dashboard/AMLAPURA/PLN/tambah','DataController@tambahaprpln');
Route::post('/dashboard/AMLAPURA/PLN/store','DataController@storeaprpln');
Route::post('/dashboard/AMLAPURA/PLN/update','DataController@updateaprpln');

Route::get('/dashboard/AMLAPURA/AC',['as' => 'apr_ac', 'uses' =>'DataController@indexaprac']);
Route::get('/dashboard/AMLAPURA/AC/tambah','DataController@tambahaprac');
Route::post('/dashboard/AMLAPURA/AC/store','DataController@storeaprac');
Route::post('/dashboard/AMLAPURA/AC/update','DataController@updateaprac');

Route::get('/dashboard/AMLAPURA/GENERATOR',['as' => 'apr_generator', 'uses' =>'DataController@indexaprgenerator']);
Route::get('/dashboard/AMLAPURA/GENERATOR/tambah','DataController@tambahaprgenerator');
Route::post('/dashboard/AMLAPURA/GENERATOR/store','DataController@storeaprgenerator');
Route::post('/dashboard/AMLAPURA/GENERATOR/update','DataController@updateaprgenerator');

Route::get('/dashboard/AMLAPURA/RECTIFIER',['as' => 'apr_rectifier', 'uses' =>'DataController@indexaprrectifier']);
Route::get('/dashboard/AMLAPURA/RECTIFIER/tambah','DataController@tambahaprrectifier');
Route::post('/dashboard/AMLAPURA/RECTIFIER/store','DataController@storeaprrectifier');
Route::post('/dashboard/AMLAPURA/RECTIFIER/update','DataController@updateaprrectifier');

Route::get('/dashboard/AMLAPURA/BATTERE',['as' => 'apr_battere', 'uses' =>'DataController@indexaprbattere']);
Route::get('/dashboard/AMLAPURA/BATTERE/tambah','DataController@tambahaprbattere');
Route::post('/dashboard/AMLAPURA/BATTERE/store','DataController@storeaprbattere');
Route::post('/dashboard/AMLAPURA/BATTERE/update','DataController@updateaprbattere');

// -- BANGLI --
Route::get('/dashboard/BANGLI/PLN',['as' => 'bli_pln', 'uses' =>'DataController@indexblipln']);
Route::get('/dashboard/BANGLI/PLN/tambah','DataController@tambahblipln');
Route::post('/dashboard/BANGLI/PLN/store','DataController@storeblipln');
Route::post('/dashboard/BANGLI/PLN/update','DataController@updateblipln');

Route::get('/dashboard/BANGLI/AC',['as' => 'bli_ac', 'uses' =>'DataController@indexbliac']);
Route::get('/dashboard/BANGLI/AC/tambah','DataController@tambahbliac');
Route::post('/dashboard/BANGLI/AC/store','DataController@storebliac');
Route::post('/dashboard/BANGLI/AC/update','DataController@updatebliac');

Route::get('/dashboard/BANGLI/GENERATOR',['as' => 'bli_generator', 'uses' =>'DataController@indexbligenerator']);
Route::get('/dashboard/BANGLI/GENERATOR/tambah','DataController@tambahbligenerator');
Route::post('/dashboard/BANGLI/GENERATOR/store','DataController@storebligenerator');
Route::post('/dashboard/BANGLI/GENERATOR/update','DataController@updatebligenerator');

Route::get('/dashboard/BANGLI/RECTIFIER',['as' => 'bli_rectifier', 'uses' =>'DataController@indexblirectifier']);
Route::get('/dashboard/BANGLI/RECTIFIER/tambah','DataController@tambahblirectifier');
Route::post('/dashboard/BANGLI/RECTIFIER/store','DataController@storeblirectifier');
Route::post('/dashboard/BANGLI/RECTIFIER/update','DataController@updateblirectifier');

Route::get('/dashboard/BANGLI/BATTERE',['as' => 'bli_battere', 'uses' =>'DataController@indexblibattere']);
Route::get('/dashboard/BANGLI/BATTERE/tambah','DataController@tambahblibattere');
Route::post('/dashboard/BANGLI/BATTERE/store','DataController@storeblibattere');
Route::post('/dashboard/BANGLI/BATTERE/update','DataController@updateblibattere');

// -- BATURITI --
Route::get('/dashboard/BATURITI/PLN',['as' => 'btr_pln', 'uses' =>'DataController@indexbtrpln']);
Route::get('/dashboard/BATURITI/PLN/tambah','DataController@tambahbtrpln');
Route::post('/dashboard/BATURITI/PLN/store','DataController@storebtrpln');
Route::post('/dashboard/BATURITI/PLN/update','DataController@updatebtrpln');

Route::get('/dashboard/BATURITI/AC',['as' => 'btr_ac', 'uses' =>'DataController@indexbtrac']);
Route::get('/dashboard/BATURITI/AC/tambah','DataController@tambahbtrac');
Route::post('/dashboard/BATURITI/AC/store','DataController@storebtrac');
Route::post('/dashboard/BATURITI/AC/update','DataController@updatebtrac');

Route::get('/dashboard/BATURITI/GENERATOR',['as' => 'btr_generator', 'uses' =>'DataController@indexbtrgenerator']);
Route::get('/dashboard/BATURITI/GENERATOR/tambah','DataController@tambahbtrgenerator');
Route::post('/dashboard/BATURITI/GENERATOR/store','DataController@storebtrgenerator');
Route::post('/dashboard/BATURITI/GENERATOR/update','DataController@updatebtrgenerator');

Route::get('/dashboard/BATURITI/RECTIFIER',['as' => 'btr_rectifier', 'uses' =>'DataController@indexbtrrectifier']);
Route::get('/dashboard/BATURITI/RECTIFIER/tambah','DataController@tambahbtrrectifier');
Route::post('/dashboard/BATURITI/RECTIFIER/store','DataController@storebtrrectifier');
Route::post('/dashboard/BATURITI/RECTIFIER/update','DataController@updatebtrrectifier');

Route::get('/dashboard/BATURITI/BATTERE',['as' => 'btr_battere', 'uses' =>'DataController@indexbtrbattere']);
Route::get('/dashboard/BATURITI/BATTERE/tambah','DataController@tambahbtrbattere');
Route::post('/dashboard/BATURITI/BATTERE/store','DataController@storebtrbattere');
Route::post('/dashboard/BATURITI/BATTERE/update','DataController@updatebtrbattere');

// -- CANDIDASA --
Route::get('/dashboard/CANDIDASA/PLN',['as' => 'cds_pln', 'uses' =>'DataController@indexcdspln']);
Route::get('/dashboard/CANDIDASA/PLN/tambah','DataController@tambahcdspln');
Route::post('/dashboard/CANDIDASA/PLN/store','DataController@storecdspln');
Route::post('/dashboard/CANDIDASA/PLN/update','DataController@updatecdspln');

Route::get('/dashboard/CANDIDASA/AC',['as' => 'cds_ac', 'uses' =>'DataController@indexcdsac']);
Route::get('/dashboard/CANDIDASA/AC/tambah','DataController@tambahcdsac');
Route::post('/dashboard/CANDIDASA/AC/store','DataController@storecdsac');
Route::post('/dashboard/CANDIDASA/AC/update','DataController@updatecdsac');

Route::get('/dashboard/CANDIDASA/GENERATOR',['as' => 'cds_generator', 'uses' =>'DataController@indexcdsgenerator']);
Route::get('/dashboard/CANDIDASA/GENERATOR/tambah','DataController@tambahcdsgenerator');
Route::post('/dashboard/CANDIDASA/GENERATOR/store','DataController@storecdsgenerator');
Route::post('/dashboard/CANDIDASA/GENERATOR/update','DataController@updatecdsgenerator');

Route::get('/dashboard/CANDIDASA/RECTIFIER',['as' => 'cds_rectifier', 'uses' =>'DataController@indexcdsrectifier']);
Route::get('/dashboard/CANDIDASA/RECTIFIER/tambah','DataController@tambahcdsrectifier');
Route::post('/dashboard/CANDIDASA/RECTIFIER/store','DataController@storecdsrectifier');
Route::post('/dashboard/CANDIDASA/RECTIFIER/update','DataController@updatecdsrectifier');

Route::get('/dashboard/CANDIDASA/BATTERE',['as' => 'cds_battere', 'uses' =>'DataController@indexcdsbattere']);
Route::get('/dashboard/CANDIDASA/BATTERE/tambah','DataController@tambahcdsbattere');
Route::post('/dashboard/CANDIDASA/BATTERE/store','DataController@storecdsbattere');
Route::post('/dashboard/CANDIDASA/BATTERE/update','DataController@updatecdsbattere');

// -- GIANYAR --
Route::get('/dashboard/GIANYAR/PLN',['as' => 'gin_pln', 'uses' =>'DataController@indexginpln']);
Route::get('/dashboard/GIANYAR/PLN/tambah','DataController@tambahginpln');
Route::post('/dashboard/GIANYAR/PLN/store','DataController@storeginpln');
Route::post('/dashboard/GIANYAR/PLN/update','DataController@updateginpln');

Route::get('/dashboard/GIANYAR/AC',['as' => 'gin_ac', 'uses' =>'DataController@indexginac']);
Route::get('/dashboard/GIANYAR/AC/tambah','DataController@tambahginac');
Route::post('/dashboard/GIANYAR/AC/store','DataController@storeginac');
Route::post('/dashboard/GIANYAR/AC/update','DataController@updateginac');

Route::get('/dashboard/GIANYAR/GENERATOR',['as' => 'gin_generator', 'uses' =>'DataController@indexgingenerator']);
Route::get('/dashboard/GIANYAR/GENERATOR/tambah','DataController@tambahgingenerator');
Route::post('/dashboard/GIANYAR/GENERATOR/store','DataController@storegingenerator');
Route::post('/dashboard/GIANYAR/GENERATOR/update','DataController@updategingenerator');

Route::get('/dashboard/GIANYAR/RECTIFIER',['as' => 'gin_rectifier', 'uses' =>'DataController@indexginrectifier']);
Route::get('/dashboard/GIANYAR/RECTIFIER/tambah','DataController@tambahginrectifier');
Route::post('/dashboard/GIANYAR/RECTIFIER/store','DataController@storeginrectifier');
Route::post('/dashboard/GIANYAR/RECTIFIER/update','DataController@updateginrectifier');

Route::get('/dashboard/GIANYAR/BATTERE',['as' => 'gin_battere', 'uses' =>'DataController@indexginbattere']);
Route::get('/dashboard/GIANYAR/BATTERE/tambah','DataController@tambahginbattere');
Route::post('/dashboard/GIANYAR/BATTERE/store','DataController@storeginbattere');
Route::post('/dashboard/GIANYAR/BATTERE/update','DataController@updateginbattere');

// -- GILIMANUK --
Route::get('/dashboard/GILIMANUK/PLN',['as' => 'gmk_pln', 'uses' =>'DataController@indexgmkpln']);
Route::get('/dashboard/GILIMANUK/PLN/tambah','DataController@tambahgmkpln');
Route::post('/dashboard/GILIMANUK/PLN/store','DataController@storegmkpln');
Route::post('/dashboard/GILIMANUK/PLN/update','DataController@updategmkpln');

Route::get('/dashboard/GILIMANUK/AC',['as' => 'gmk_ac', 'uses' =>'DataController@indexgmkac']);
Route::get('/dashboard/GILIMANUK/AC/tambah','DataController@tambahgmkac');
Route::post('/dashboard/GILIMANUK/AC/store','DataController@storegmkac');
Route::post('/dashboard/GILIMANUK/AC/update','DataController@updategmkac');

Route::get('/dashboard/GILIMANUK/GENERATOR',['as' => 'gmk_generator', 'uses' =>'DataController@indexgmkgenerator']);
Route::get('/dashboard/GILIMANUK/GENERATOR/tambah','DataController@tambahgmkgenerator');
Route::post('/dashboard/GILIMANUK/GENERATOR/store','DataController@storegmkgenerator');
Route::post('/dashboard/GILIMANUK/GENERATOR/update','DataController@updategmkgenerator');

Route::get('/dashboard/GILIMANUK/RECTIFIER',['as' => 'gmk_rectifier', 'uses' =>'DataController@indexgmkrectifier']);
Route::get('/dashboard/GILIMANUK/RECTIFIER/tambah','DataController@tambahgmkrectifier');
Route::post('/dashboard/GILIMANUK/RECTIFIER/store','DataController@storegmkrectifier');
Route::post('/dashboard/GILIMANUK/RECTIFIER/update','DataController@updategmkrectifier');

Route::get('/dashboard/GILIMANUK/BATTERE',['as' => 'gmk_battere', 'uses' =>'DataController@indexgmkbattere']);
Route::get('/dashboard/GILIMANUK/BATTERE/tambah','DataController@tambahgmkbattere');
Route::post('/dashboard/GILIMANUK/BATTERE/store','DataController@storegmkbattere');
Route::post('/dashboard/GILIMANUK/BATTERE/update','DataController@updategmkbattere');

// -- KINTAMANI --
Route::get('/dashboard/KINTAMANI/PLN',['as' => 'knt_pln', 'uses' =>'DataController@indexkntpln']);
Route::get('/dashboard/KINTAMANI/PLN/tambah','DataController@tambahkntpln');
Route::post('/dashboard/KINTAMANI/PLN/store','DataController@storekntpln');
Route::post('/dashboard/KINTAMANI/PLN/update','DataController@updatekntpln');

Route::get('/dashboard/KINTAMANI/AC',['as' => 'knt_ac', 'uses' =>'DataController@indexkntac']);
Route::get('/dashboard/KINTAMANI/AC/tambah','DataController@tambahkntac');
Route::post('/dashboard/KINTAMANI/AC/store','DataController@storekntac');
Route::post('/dashboard/KINTAMANI/AC/update','DataController@updatekntac');

Route::get('/dashboard/KINTAMANI/GENERATOR',['as' => 'knt_generator', 'uses' =>'DataController@indexkntgenerator']);
Route::get('/dashboard/KINTAMANI/GENERATOR/tambah','DataController@tambahkntgenerator');
Route::post('/dashboard/KINTAMANI/GENERATOR/store','DataController@storekntgenerator');
Route::post('/dashboard/KINTAMANI/GENERATOR/update','DataController@updatekntgenerator');

Route::get('/dashboard/KINTAMANI/RECTIFIER',['as' => 'knt_rectifier', 'uses' =>'DataController@indexkntrectifier']);
Route::get('/dashboard/KINTAMANI/RECTIFIER/tambah','DataController@tambahkntrectifier');
Route::post('/dashboard/KINTAMANI/RECTIFIER/store','DataController@storekntrectifier');
Route::post('/dashboard/KINTAMANI/RECTIFIER/update','DataController@updatekntrectifier');

Route::get('/dashboard/KINTAMANI/BATTERE',['as' => 'knt_battere', 'uses' =>'DataController@indexkntbattere']);
Route::get('/dashboard/KINTAMANI/BATTERE/tambah','DataController@tambahkntbattere');
Route::post('/dashboard/KINTAMANI/BATTERE/store','DataController@storekntbattere');
Route::post('/dashboard/KINTAMANI/BATTERE/update','DataController@updatekntbattere');

// -- LOVINA --
Route::get('/dashboard/LOVINA/PLN',['as' => 'lvn_pln', 'uses' =>'DataController@indexlvnpln']);
Route::get('/dashboard/LOVINA/PLN/tambah','DataController@tambahlvnpln');
Route::post('/dashboard/LOVINA/PLN/store','DataController@storelvnpln');
Route::post('/dashboard/LOVINA/PLN/update','DataController@updatelvnpln');

Route::get('/dashboard/LOVINA/AC',['as' => 'lvn_ac', 'uses' =>'DataController@indexlvnac']);
Route::get('/dashboard/LOVINA/AC/tambah','DataController@tambahlvnac');
Route::post('/dashboard/LOVINA/AC/store','DataController@storelvnac');
Route::post('/dashboard/LOVINA/AC/update','DataController@updatelvnac');

Route::get('/dashboard/LOVINA/GENERATOR',['as' => 'lvn_generator', 'uses' =>'DataController@indexlvngenerator']);
Route::get('/dashboard/LOVINA/GENERATOR/tambah','DataController@tambahlvngenerator');
Route::post('/dashboard/LOVINA/GENERATOR/store','DataController@storelvngenerator');
Route::post('/dashboard/LOVINA/GENERATOR/update','DataController@updatelvngenerator');

Route::get('/dashboard/LOVINA/RECTIFIER',['as' => 'lvn_rectifier', 'uses' =>'DataController@indexlvnrectifier']);
Route::get('/dashboard/LOVINA/RECTIFIER/tambah','DataController@tambahlvnrectifier');
Route::post('/dashboard/LOVINA/RECTIFIER/store','DataController@storelvnrectifier');
Route::post('/dashboard/LOVINA/RECTIFIER/update','DataController@updatelvnrectifier');

Route::get('/dashboard/LOVINA/BATTERE',['as' => 'lvn_battere', 'uses' =>'DataController@indexlvnbattere']);
Route::get('/dashboard/LOVINA/BATTERE/tambah','DataController@tambahlvnbattere');
Route::post('/dashboard/LOVINA/BATTERE/store','DataController@storelvnbattere');
Route::post('/dashboard/LOVINA/BATTERE/update','DataController@updatelvnbattere');

// -- NEGARA --
Route::get('/dashboard/NEGARA/PLN',['as' => 'ngr_pln', 'uses' =>'DataController@indexngrpln']);
Route::get('/dashboard/NEGARA/PLN/tambah','DataController@tambahngrpln');
Route::post('/dashboard/NEGARA/PLN/store','DataController@storengrpln');
Route::post('/dashboard/NEGARA/PLN/update','DataController@updatengrpln');

Route::get('/dashboard/NEGARA/AC',['as' => 'ngr_ac', 'uses' =>'DataController@indexngrac']);
Route::get('/dashboard/NEGARA/AC/tambah','DataController@tambahngrac');
Route::post('/dashboard/NEGARA/AC/store','DataController@storengrac');
Route::post('/dashboard/NEGARA/AC/update','DataController@updatengrac');

Route::get('/dashboard/NEGARA/GENERATOR',['as' => 'ngr_generator', 'uses' =>'DataController@indexngrgenerator']);
Route::get('/dashboard/NEGARA/GENERATOR/tambah','DataController@tambahngrgenerator');
Route::post('/dashboard/NEGARA/GENERATOR/store','DataController@storengrgenerator');
Route::post('/dashboard/NEGARA/GENERATOR/update','DataController@updatengrgenerator');

Route::get('/dashboard/NEGARA/RECTIFIER',['as' => 'ngr_rectifier', 'uses' =>'DataController@indexngrrectifier']);
Route::get('/dashboard/NEGARA/RECTIFIER/tambah','DataController@tambahngrrectifier');
Route::post('/dashboard/NEGARA/RECTIFIER/store','DataController@storengrrectifier');
Route::post('/dashboard/NEGARA/RECTIFIER/update','DataController@updatengrrectifier');

Route::get('/dashboard/NEGARA/BATTERE',['as' => 'ngr_battere', 'uses' =>'DataController@indexngrbattere']);
Route::get('/dashboard/NEGARA/BATTERE/tambah','DataController@tambahngrbattere');
Route::post('/dashboard/NEGARA/BATTERE/store','DataController@storengrbattere');
Route::post('/dashboard/NEGARA/BATTERE/update','DataController@updatengrbattere');

// -- PUPUAN --
Route::get('/dashboard/PUPUAN/PLN',['as' => 'pua_pln', 'uses' =>'DataController@indexpuapln']);
Route::get('/dashboard/PUPUAN/PLN/tambah','DataController@tambahpuapln');
Route::post('/dashboard/PUPUAN/PLN/store','DataController@storepuapln');
Route::post('/dashboard/PUPUAN/PLN/update','DataController@updatepuapln');

Route::get('/dashboard/PUPUAN/AC',['as' => 'pua_ac', 'uses' =>'DataController@indexpuaac']);
Route::get('/dashboard/PUPUAN/AC/tambah','DataController@tambahpuaac');
Route::post('/dashboard/PUPUAN/AC/store','DataController@storepuaac');
Route::post('/dashboard/PUPUAN/AC/update','DataController@updatepuaac');

Route::get('/dashboard/PUPUAN/GENERATOR',['as' => 'pua_generator', 'uses' =>'DataController@indexpuagenerator']);
Route::get('/dashboard/PUPUAN/GENERATOR/tambah','DataController@tambahpuagenerator');
Route::post('/dashboard/PUPUAN/GENERATOR/store','DataController@storepuagenerator');
Route::post('/dashboard/PUPUAN/GENERATOR/update','DataController@updatepuagenerator');

Route::get('/dashboard/PUPUAN/RECTIFIER',['as' => 'pua_rectifier', 'uses' =>'DataController@indexpuarectifier']);
Route::get('/dashboard/PUPUAN/RECTIFIER/tambah','DataController@tambahpuarectifier');
Route::post('/dashboard/PUPUAN/RECTIFIER/store','DataController@storepuarectifier');
Route::post('/dashboard/PUPUAN/RECTIFIER/update','DataController@updatepuarectifier');

Route::get('/dashboard/PUPUAN/BATTERE',['as' => 'pua_battere', 'uses' =>'DataController@indexpuabattere']);
Route::get('/dashboard/PUPUAN/BATTERE/tambah','DataController@tambahpuabattere');
Route::post('/dashboard/PUPUAN/BATTERE/store','DataController@storepuabattere');
Route::post('/dashboard/PUPUAN/BATTERE/update','DataController@updatepuabattere');

// -- SINGARAJA --
Route::get('/dashboard/SINGARAJA/PLN',['as' => 'sgr_pln', 'uses' =>'DataController@indexsgrpln']);
Route::get('/dashboard/SINGARAJA/PLN/tambah','DataController@tambahsgrpln');
Route::post('/dashboard/SINGARAJA/PLN/store','DataController@storesgrpln');
Route::post('/dashboard/SINGARAJA/PLN/update','DataController@updatesgrpln');

Route::get('/dashboard/SINGARAJA/AC',['as' => 'sgr_ac', 'uses' =>'DataController@indexsgrac']);
Route::get('/dashboard/SINGARAJA/AC/tambah','DataController@tambahsgrac');
Route::post('/dashboard/SINGARAJA/AC/store','DataController@storesgrac');
Route::post('/dashboard/SINGARAJA/AC/update','DataController@updatesgrac');

Route::get('/dashboard/SINGARAJA/GENERATOR',['as' => 'sgr_generator', 'uses' =>'DataController@indexsgrgenerator']);
Route::get('/dashboard/SINGARAJA/GENERATOR/tambah','DataController@tambahsgrgenerator');
Route::post('/dashboard/SINGARAJA/GENERATOR/store','DataController@storesgrgenerator');
Route::post('/dashboard/SINGARAJA/GENERATOR/update','DataController@updatesgrgenerator');

Route::get('/dashboard/SINGARAJA/RECTIFIER',['as' => 'sgr_rectifier', 'uses' =>'DataController@indexsgrrectifier']);
Route::get('/dashboard/SINGARAJA/RECTIFIER/tambah','DataController@tambahsgrrectifier');
Route::post('/dashboard/SINGARAJA/RECTIFIER/store','DataController@storesgrrectifier');
Route::post('/dashboard/SINGARAJA/RECTIFIER/update','DataController@updatesgrrectifier');

Route::get('/dashboard/SINGARAJA/BATTERE',['as' => 'sgr_battere', 'uses' =>'DataController@indexsgrbattere']);
Route::get('/dashboard/SINGARAJA/BATTERE/tambah','DataController@tambahsgrbattere');
Route::post('/dashboard/SINGARAJA/BATTERE/store','DataController@storesgrbattere');
Route::post('/dashboard/SINGARAJA/BATTERE/update','DataController@updatesgrbattere');

// -- SEMARAPURA --
Route::get('/dashboard/SEMARAPURA/PLN',['as' => 'sma_pln', 'uses' =>'DataController@indexsmapln']);
Route::get('/dashboard/SEMARAPURA/PLN/tambah','DataController@tambahsmapln');
Route::post('/dashboard/SEMARAPURA/PLN/store','DataController@storesmapln');
Route::post('/dashboard/SEMARAPURA/PLN/update','DataController@updatesmapln');

Route::get('/dashboard/SEMARAPURA/AC',['as' => 'sma_ac', 'uses' =>'DataController@indexsmaac']);
Route::get('/dashboard/SEMARAPURA/AC/tambah','DataController@tambahsmaac');
Route::post('/dashboard/SEMARAPURA/AC/store','DataController@storesmaac');
Route::post('/dashboard/SEMARAPURA/AC/update','DataController@updatesmaac');

Route::get('/dashboard/SEMARAPURA/GENERATOR',['as' => 'sma_generator', 'uses' =>'DataController@indexsmagenerator']);
Route::get('/dashboard/SEMARAPURA/GENERATOR/tambah','DataController@tambahsmagenerator');
Route::post('/dashboard/SEMARAPURA/GENERATOR/store','DataController@storesmagenerator');
Route::post('/dashboard/SEMARAPURA/GENERATOR/update','DataController@updatesmagenerator');

Route::get('/dashboard/SEMARAPURA/RECTIFIER',['as' => 'sma_rectifier', 'uses' =>'DataController@indexsmarectifier']);
Route::get('/dashboard/SEMARAPURA/RECTIFIER/tambah','DataController@tambahsmarectifier');
Route::post('/dashboard/SEMARAPURA/RECTIFIER/store','DataController@storesmarectifier');
Route::post('/dashboard/SEMARAPURA/RECTIFIER/update','DataController@updatesmarectifier');

Route::get('/dashboard/SEMARAPURA/BATTERE',['as' => 'sma_battere', 'uses' =>'DataController@indexsmabattere']);
Route::get('/dashboard/SEMARAPURA/BATTERE/tambah','DataController@tambahsmabattere');
Route::post('/dashboard/SEMARAPURA/BATTERE/store','DataController@storesmabattere');
Route::post('/dashboard/SEMARAPURA/BATTERE/update','DataController@updatesmabattere');

// -- SERIRIT --
Route::get('/dashboard/SERIRIT/PLN',['as' => 'srr_pln', 'uses' =>'DataController@indexsrrpln']);
Route::get('/dashboard/SERIRIT/PLN/tambah','DataController@tambahsrrpln');
Route::post('/dashboard/SERIRIT/PLN/store','DataController@storesrrpln');
Route::post('/dashboard/SERIRIT/PLN/update','DataController@updatesrrpln');

Route::get('/dashboard/SERIRIT/AC',['as' => 'srr_ac', 'uses' =>'DataController@indexsrrac']);
Route::get('/dashboard/SERIRIT/AC/tambah','DataController@tambahsrrac');
Route::post('/dashboard/SERIRIT/AC/store','DataController@storesrrac');
Route::post('/dashboard/SERIRIT/AC/update','DataController@updatesrrac');

Route::get('/dashboard/SERIRIT/GENERATOR',['as' => 'srr_generator', 'uses' =>'DataController@indexsrrgenerator']);
Route::get('/dashboard/SERIRIT/GENERATOR/tambah','DataController@tambahsrrgenerator');
Route::post('/dashboard/SERIRIT/GENERATOR/store','DataController@storesrrgenerator');
Route::post('/dashboard/SERIRIT/GENERATOR/update','DataController@updatesrrgenerator');

Route::get('/dashboard/SERIRIT/RECTIFIER',['as' => 'srr_rectifier', 'uses' =>'DataController@indexsrrrectifier']);
Route::get('/dashboard/SERIRIT/RECTIFIER/tambah','DataController@tambahsrrrectifier');
Route::post('/dashboard/SERIRIT/RECTIFIER/store','DataController@storesrrrectifier');
Route::post('/dashboard/SERIRIT/RECTIFIER/update','DataController@updatesrrrectifier');

Route::get('/dashboard/SERIRIT/BATTERE',['as' => 'srr_battere', 'uses' =>'DataController@indexsrrbattere']);
Route::get('/dashboard/SERIRIT/BATTERE/tambah','DataController@tambahsrrbattere');
Route::post('/dashboard/SERIRIT/BATTERE/store','DataController@storesrrbattere');
Route::post('/dashboard/SERIRIT/BATTERE/update','DataController@updatesrrbattere');

// -- TABANAN --
Route::get('/dashboard/TABANAN/PLN',['as' => 'tbn_pln', 'uses' =>'DataController@indextbnpln']);
Route::get('/dashboard/TABANAN/PLN/tambah','DataController@tambahtbnpln');
Route::post('/dashboard/TABANAN/PLN/store','DataController@storetbnpln');
Route::post('/dashboard/TABANAN/PLN/update','DataController@updatetbnpln');

Route::get('/dashboard/TABANAN/AC',['as' => 'tbn_ac', 'uses' =>'DataController@indextbnac']);
Route::get('/dashboard/TABANAN/AC/tambah','DataController@tambahtbnac');
Route::post('/dashboard/TABANAN/AC/store','DataController@storetbnac');
Route::post('/dashboard/TABANAN/AC/update','DataController@updatetbnac');

Route::get('/dashboard/TABANAN/GENERATOR',['as' => 'tbn_generator', 'uses' =>'DataController@indextbngenerator']);
Route::get('/dashboard/TABANAN/GENERATOR/tambah','DataController@tambahtbngenerator');
Route::post('/dashboard/TABANAN/GENERATOR/store','DataController@storetbngenerator');
Route::post('/dashboard/TABANAN/GENERATOR/update','DataController@updatetbngenerator');

Route::get('/dashboard/TABANAN/RECTIFIER',['as' => 'tbn_rectifier', 'uses' =>'DataController@indextbnrectifier']);
Route::get('/dashboard/TABANAN/RECTIFIER/tambah','DataController@tambahtbnrectifier');
Route::post('/dashboard/TABANAN/RECTIFIER/store','DataController@storetbnrectifier');
Route::post('/dashboard/TABANAN/RECTIFIER/update','DataController@updatetbnrectifier');

Route::get('/dashboard/TABANAN/BATTERE',['as' => 'tbn_battere', 'uses' =>'DataController@indextbnbattere']);
Route::get('/dashboard/TABANAN/BATTERE/tambah','DataController@tambahtbnbattere');
Route::post('/dashboard/TABANAN/BATTERE/store','DataController@storetbnbattere');
Route::post('/dashboard/TABANAN/BATTERE/update','DataController@updatetbnbattere');

// -- TAMPAK SIRING --
Route::get('/dashboard/TAMPAK SIRING/PLN',['as' => 'tps_pln', 'uses' =>'DataController@indextpspln']);
Route::get('/dashboard/TAMPAK SIRING/PLN/tambah','DataController@tambahtpspln');
Route::post('/dashboard/TAMPAK SIRING/PLN/store','DataController@storetpspln');
Route::post('/dashboard/TAMPAK SIRING/PLN/update','DataController@updatetpspln');

Route::get('/dashboard/TAMPAK SIRING/AC',['as' => 'tps_ac', 'uses' =>'DataController@indextpsac']);
Route::get('/dashboard/TAMPAK SIRING/AC/tambah','DataController@tambahtpsac');
Route::post('/dashboard/TAMPAK SIRING/AC/store','DataController@storetpsac');
Route::post('/dashboard/TAMPAK SIRING/AC/update','DataController@updatetpsac');

Route::get('/dashboard/TAMPAK SIRING/GENERATOR',['as' => 'tps_generator', 'uses' =>'DataController@indextpsgenerator']);
Route::get('/dashboard/TAMPAK SIRING/GENERATOR/tambah','DataController@tambahtpsgenerator');
Route::post('/dashboard/TAMPAK SIRING/GENERATOR/store','DataController@storetpsgenerator');
Route::post('/dashboard/TAMPAK SIRING/GENERATOR/update','DataController@updatetpsgenerator');

Route::get('/dashboard/TAMPAK SIRING/RECTIFIER',['as' => 'tps_rectifier', 'uses' =>'DataController@indextpsrectifier']);
Route::get('/dashboard/TAMPAK SIRING/RECTIFIER/tambah','DataController@tambahtpsrectifier');
Route::post('/dashboard/TAMPAK SIRING/RECTIFIER/store','DataController@storetpsrectifier');
Route::post('/dashboard/TAMPAK SIRING/RECTIFIER/update','DataController@updatetpsrectifier');

Route::get('/dashboard/TAMPAK SIRING/BATTERE',['as' => 'tps_battere', 'uses' =>'DataController@indextpsbattere']);
Route::get('/dashboard/TAMPAK SIRING/BATTERE/tambah','DataController@tambahtpsbattere');
Route::post('/dashboard/TAMPAK SIRING/BATTERE/store','DataController@storetpsbattere');
Route::post('/dashboard/TAMPAK SIRING/BATTERE/update','DataController@updatetpsbattere');

// -- UBUD --
Route::get('/dashboard/UBUD/PLN',['as' => 'ubu_pln', 'uses' =>'DataController@indexubupln']);
Route::get('/dashboard/UBUD/PLN/tambah','DataController@tambahubupln');
Route::post('/dashboard/UBUD/PLN/store','DataController@storeubupln');
Route::post('/dashboard/UBUD/PLN/update','DataController@updateubupln');

Route::get('/dashboard/UBUD/AC',['as' => 'ubu_ac', 'uses' =>'DataController@indexubuac']);
Route::get('/dashboard/UBUD/AC/tambah','DataController@tambahubuac');
Route::post('/dashboard/UBUD/AC/store','DataController@storeubuac');
Route::post('/dashboard/UBUD/AC/update','DataController@updateubuac');

Route::get('/dashboard/UBUD/GENERATOR',['as' => 'ubu_generator', 'uses' =>'DataController@indexubugenerator']);
Route::get('/dashboard/UBUD/GENERATOR/tambah','DataController@tambahubugenerator');
Route::post('/dashboard/UBUD/GENERATOR/store','DataController@storeubugenerator');
Route::post('/dashboard/UBUD/GENERATOR/update','DataController@updateubugenerator');

Route::get('/dashboard/UBUD/RECTIFIER',['as' => 'ubu_rectifier', 'uses' =>'DataController@indexuburectifier']);
Route::get('/dashboard/UBUD/RECTIFIER/tambah','DataController@tambahuburectifier');
Route::post('/dashboard/UBUD/RECTIFIER/store','DataController@storeuburectifier');
Route::post('/dashboard/UBUD/RECTIFIER/update','DataController@updateuburectifier');

Route::get('/dashboard/UBUD/BATTERE',['as' => 'ubu_battere', 'uses' =>'DataController@indexububattere']);
Route::get('/dashboard/UBUD/BATTERE/tambah','DataController@tambahububattere');
Route::post('/dashboard/UBUD/BATTERE/store','DataController@storeububattere');
Route::post('/dashboard/UBUD/BATTERE/update','DataController@updateububattere');

// ===================================================== ROZIQ =====================================================================//
// ==========BENOA==========
Route::get('/dashboard/BENOA/PLN',['as' => 'bno_pln', 'uses' =>'DataController@indexbnopln']);
Route::get('/dashboard/BENOA/PLN/tambah','DataController@tambahbnopln');
Route::post('/dashboard/BENOA/PLN/store','DataController@storebnopln');
Route::post('/dashboard/BENOA/PLN/update','DataController@updatebnopln');

Route::get('/dashboard/BENOA/AC',['as' => 'bno_ac', 'uses' =>'DataController@indexbnoac']);
Route::get('/dashboard/BENOA/AC/tambah','DataController@tambahbnoac');
Route::post('/dashboard/BENOA/AC/store','DataController@storebnoac');
Route::post('/dashboard/BENOA/AC/update','DataController@updatebnoac');

Route::get('/dashboard/BENOA/GENERATOR',['as' => 'bno_generator', 'uses' =>'DataController@indexbnogenerator']);
Route::get('/dashboard/BENOA/GENERATOR/tambah','DataController@tambahbnogenerator');
Route::post('/dashboard/BENOA/GENERATOR/store','DataController@storebnogenerator');
Route::post('/dashboard/BENOA/GENERATOR/update','DataController@updatebnogenerator');

Route::get('/dashboard/BENOA/RECTIFIER',['as' => 'bno_rectifier', 'uses' =>'DataController@indexbnorectifier']);
Route::get('/dashboard/BENOA/RECTIFIER/tambah','DataController@tambahbnorectifier');
Route::post('/dashboard/BENOA/RECTIFIER/store','DataController@storebnorectifier');
Route::post('/dashboard/BENOA/RECTIFIER/update','DataController@updatebnorectifier');

Route::get('/dashboard/BENOA/BATTERE',['as' => 'bno_battere', 'uses' =>'DataController@indexbnobattere']);
Route::get('/dashboard/BENOA/BATTERE/tambah','DataController@tambahbnobattere');
Route::post('/dashboard/BENOA/BATTERE/store','DataController@storebnobattere');
Route::post('/dashboard/BENOA/BATTERE/update','DataController@updatebnobattere');

// ==========JIMBARAN==========
Route::get('/dashboard/JIMBARAN/PLN',['as' => 'jbr_pln', 'uses' =>'DataController@indexjbrpln']);
Route::get('/dashboard/JIMBARAN/PLN/tambah','DataController@tambahjbrpln');
Route::post('/dashboard/JIMBARAN/PLN/store','DataController@storejbrpln');
Route::post('/dashboard/JIMBARAN/PLN/update','DataController@updatejbrpln');

Route::get('/dashboard/JIMBARAN/AC',['as' => 'jbr_ac', 'uses' =>'DataController@indexjbrac']);
Route::get('/dashboard/JIMBARAN/AC/tambah','DataController@tambahjbrac');
Route::post('/dashboard/JIMBARAN/AC/store','DataController@storejbrac');
Route::post('/dashboard/JIMBARAN/AC/update','DataController@updatejbrac');

Route::get('/dashboard/JIMBARAN/GENERATOR',['as' => 'jbr_generator', 'uses' =>'DataController@indexjbrgenerator']);
Route::get('/dashboard/JIMBARAN/GENERATOR/tambah','DataController@tambahjbrgenerator');
Route::post('/dashboard/JIMBARAN/GENERATOR/store','DataController@storejbrgenerator');
Route::post('/dashboard/JIMBARAN/GENERATOR/update','DataController@updatejbrgenerator');

Route::get('/dashboard/JIMBARAN/RECTIFIER',['as' => 'jbr_rectifier', 'uses' =>'DataController@indexjbrrectifier']);
Route::get('/dashboard/JIMBARAN/RECTIFIER/tambah','DataController@tambahjbrrectifier');
Route::post('/dashboard/JIMBARAN/RECTIFIER/store','DataController@storejbrrectifier');
Route::post('/dashboard/JIMBARAN/RECTIFIER/update','DataController@updatejbrrectifier');

Route::get('/dashboard/JIMBARAN/BATTERE',['as' => 'jbr_battere', 'uses' =>'DataController@indexjbrbattere']);
Route::get('/dashboard/JIMBARAN/BATTERE/tambah','DataController@tambahjbrbattere');
Route::post('/dashboard/JIMBARAN/BATTERE/store','DataController@storejbrbattere');
Route::post('/dashboard/JIMBARAN/BATTERE/update','DataController@updatejbrbattere');

// ==========KALIASEM==========
Route::get('/dashboard/KALIASEM/PLN',['as' => 'klm_pln', 'uses' =>'DataController@indexklmpln']);
Route::get('/dashboard/KALIASEM/PLN/tambah','DataController@tambahklmpln');
Route::post('/dashboard/KALIASEM/PLN/store','DataController@storeklmpln');
Route::post('/dashboard/KALIASEM/PLN/update','DataController@updateklmpln');

Route::get('/dashboard/KALIASEM/AC',['as' => 'klm_ac', 'uses' =>'DataController@indexklmac']);
Route::get('/dashboard/KALIASEM/AC/tambah','DataController@tambahklmac');
Route::post('/dashboard/KALIASEM/AC/store','DataController@storeklmac');
Route::post('/dashboard/KALIASEM/AC/update','DataController@updateklmac');

Route::get('/dashboard/KALIASEM/GENERATOR',['as' => 'klm_generator', 'uses' =>'DataController@indexklmgenerator']);
Route::get('/dashboard/KALIASEM/GENERATOR/tambah','DataController@tambahklmgenerator');
Route::post('/dashboard/KALIASEM/GENERATOR/store','DataController@storeklmgenerator');
Route::post('/dashboard/KALIASEM/GENERATOR/update','DataController@updateklmgenerator');

Route::get('/dashboard/KALIASEM/RECTIFIER',['as' => 'klm_rectifier', 'uses' =>'DataController@indexklmrectifier']);
Route::get('/dashboard/KALIASEM/RECTIFIER/tambah','DataController@tambahklmrectifier');
Route::post('/dashboard/KALIASEM/RECTIFIER/store','DataController@storeklmrectifier');
Route::post('/dashboard/KALIASEM/RECTIFIER/update','DataController@updateklmrectifier');

Route::get('/dashboard/KALIASEM/BATTERE',['as' => 'klm_battere', 'uses' =>'DataController@indexklmbattere']);
Route::get('/dashboard/KALIASEM/BATTERE/tambah','DataController@tambahklmbattere');
Route::post('/dashboard/KALIASEM/BATTERE/store','DataController@storeklmbattere');
Route::post('/dashboard/KALIASEM/BATTERE/update','DataController@updateklmbattere');

// ==========KUTA==========
Route::get('/dashboard/KUTA/PLN',['as' => 'kut_pln', 'uses' =>'DataController@indexkutpln']);
Route::get('/dashboard/KUTA/PLN/tambah','DataController@tambahkutpln');
Route::post('/dashboard/KUTA/PLN/store','DataController@storekutpln');
Route::post('/dashboard/KUTA/PLN/update','DataController@updatekutpln');

Route::get('/dashboard/KUTA/AC',['as' => 'kut_ac', 'uses' =>'DataController@indexkutac']);
Route::get('/dashboard/KUTA/AC/tambah','DataController@tambahkutac');
Route::post('/dashboard/KUTA/AC/store','DataController@storekutac');
Route::post('/dashboard/KUTA/AC/update','DataController@updatekutac');

Route::get('/dashboard/KUTA/GENERATOR',['as' => 'kut_generator', 'uses' =>'DataController@indexkutgenerator']);
Route::get('/dashboard/KUTA/GENERATOR/tambah','DataController@tambahkutgenerator');
Route::post('/dashboard/KUTA/GENERATOR/store','DataController@storekutgenerator');
Route::post('/dashboard/KUTA/GENERATOR/update','DataController@updatekutgenerator');

Route::get('/dashboard/KUTA/RECTIFIER',['as' => 'kut_rectifier', 'uses' =>'DataController@indexkutrectifier']);
Route::get('/dashboard/KUTA/RECTIFIER/tambah','DataController@tambahkutrectifier');
Route::post('/dashboard/KUTA/RECTIFIER/store','DataController@storekutrectifier');
Route::post('/dashboard/KUTA/RECTIFIER/update','DataController@updatekutrectifier');

Route::get('/dashboard/KUTA/BATTERE',['as' => 'kut_battere', 'uses' =>'DataController@indexkutbattere']);
Route::get('/dashboard/KUTA/BATTERE/tambah','DataController@tambahkutbattere');
Route::post('/dashboard/KUTA/BATTERE/store','DataController@storekutbattere');
Route::post('/dashboard/KUTA/BATTERE/update','DataController@updatekutbattere');

// ==========MONANG-MANING==========
Route::get('/dashboard/MONANG-MANING/PLN',['as' => 'mmn_pln', 'uses' =>'DataController@indexmmnpln']);
Route::get('/dashboard/MONANG-MANING/PLN/tambah','DataController@tambahmmnpln');
Route::post('/dashboard/MONANG-MANING/PLN/store','DataController@storemmnpln');
Route::post('/dashboard/MONANG-MANING/PLN/update','DataController@updatemmnpln');

Route::get('/dashboard/MONANG-MANING/AC',['as' => 'mmn_ac', 'uses' =>'DataController@indexmmnac']);
Route::get('/dashboard/MONANG-MANING/AC/tambah','DataController@tambahmmnac');
Route::post('/dashboard/MONANG-MANING/AC/store','DataController@storemmnac');
Route::post('/dashboard/MONANG-MANING/AC/update','DataController@updatemmnac');

Route::get('/dashboard/MONANG-MANING/GENERATOR',['as' => 'mmn_generator', 'uses' =>'DataController@indexmmngenerator']);
Route::get('/dashboard/MONANG-MANING/GENERATOR/tambah','DataController@tambahmmngenerator');
Route::post('/dashboard/MONANG-MANING/GENERATOR/store','DataController@storemmngenerator');
Route::post('/dashboard/MONANG-MANING/GENERATOR/update','DataController@updatemmngenerator');

Route::get('/dashboard/MONANG-MANING/RECTIFIER',['as' => 'mmn_rectifier', 'uses' =>'DataController@indexmmnrectifier']);
Route::get('/dashboard/MONANG-MANING/RECTIFIER/tambah','DataController@tambahmmnrectifier');
Route::post('/dashboard/MONANG-MANING/RECTIFIER/store','DataController@storemmnrectifier');
Route::post('/dashboard/MONANG-MANING/RECTIFIER/update','DataController@updatemmnrectifier');

Route::get('/dashboard/MONANG-MANING/BATTERE',['as' => 'mmn_battere', 'uses' =>'DataController@indexmmnbattere']);
Route::get('/dashboard/MONANG-MANING/BATTERE/tambah','DataController@tambahmmnbattere');
Route::post('/dashboard/MONANG-MANING/BATTERE/store','DataController@storemmnbattere');
Route::post('/dashboard/MONANG-MANING/BATTERE/update','DataController@updatemmnbattere');

// ==========SANUR==========
Route::get('/dashboard/SANUR/PLN',['as' => 'sau_pln', 'uses' =>'DataController@indexsaupln']);
Route::get('/dashboard/SANUR/PLN/tambah','DataController@tambahsaupln');
Route::post('/dashboard/SANUR/PLN/store','DataController@storesaupln');
Route::post('/dashboard/SANUR/PLN/update','DataController@updatesaupln');

Route::get('/dashboard/SANUR/AC',['as' => 'sau_ac', 'uses' =>'DataController@indexsauac']);
Route::get('/dashboard/SANUR/AC/tambah','DataController@tambahsauac');
Route::post('/dashboard/SANUR/AC/store','DataController@storesauac');
Route::post('/dashboard/SANUR/AC/update','DataController@updatesauac');

Route::get('/dashboard/SANUR/GENERATOR',['as' => 'sau_generator', 'uses' =>'DataController@indexsaugenerator']);
Route::get('/dashboard/SANUR/GENERATOR/tambah','DataController@tambahsaugenerator');
Route::post('/dashboard/SANUR/GENERATOR/store','DataController@storesaugenerator');
Route::post('/dashboard/SANUR/GENERATOR/update','DataController@updatesaugenerator');

Route::get('/dashboard/SANUR/RECTIFIER',['as' => 'sau_rectifier', 'uses' =>'DataController@indexsaurectifier']);
Route::get('/dashboard/SANUR/RECTIFIER/tambah','DataController@tambahsaurectifier');
Route::post('/dashboard/SANUR/RECTIFIER/store','DataController@storesaurectifier');
Route::post('/dashboard/SANUR/RECTIFIER/update','DataController@updatesaurectifier');

Route::get('/dashboard/SANUR/BATTERE',['as' => 'sau_battere', 'uses' =>'DataController@indexsaubattere']);
Route::get('/dashboard/SANUR/BATTERE/tambah','DataController@tambahsaubattere');
Route::post('/dashboard/SANUR/BATTERE/store','DataController@storesaubattere');
Route::post('/dashboard/SANUR/BATTERE/update','DataController@updatesaubattere');

// ==========SEMINYAK==========
Route::get('/dashboard/SEMINYAK/PLN',['as' => 'smy_pln', 'uses' =>'DataController@indexsmypln']);
Route::get('/dashboard/SEMINYAK/PLN/tambah','DataController@tambahsmypln');
Route::post('/dashboard/SEMINYAK/PLN/store','DataController@storesmypln');
Route::post('/dashboard/SEMINYAK/PLN/update','DataController@updatesmypln');

Route::get('/dashboard/SEMINYAK/AC',['as' => 'smy_ac', 'uses' =>'DataController@indexsmyac']);
Route::get('/dashboard/SEMINYAK/AC/tambah','DataController@tambahsmyac');
Route::post('/dashboard/SEMINYAK/AC/store','DataController@storesmyac');
Route::post('/dashboard/SEMINYAK/AC/update','DataController@updatesmyac');

Route::get('/dashboard/SEMINYAK/GENERATOR',['as' => 'smy_generator', 'uses' =>'DataController@indexsmygenerator']);
Route::get('/dashboard/SEMINYAK/GENERATOR/tambah','DataController@tambahsmygenerator');
Route::post('/dashboard/SEMINYAK/GENERATOR/store','DataController@storesmygenerator');
Route::post('/dashboard/SEMINYAK/GENERATOR/update','DataController@updatesmygenerator');

Route::get('/dashboard/SEMINYAK/RECTIFIER',['as' => 'smy_rectifier', 'uses' =>'DataController@indexsmyrectifier']);
Route::get('/dashboard/SEMINYAK/RECTIFIER/tambah','DataController@tambahsmyrectifier');
Route::post('/dashboard/SEMINYAK/RECTIFIER/store','DataController@storesmyrectifier');
Route::post('/dashboard/SEMINYAK/RECTIFIER/update','DataController@updatesmyrectifier');

Route::get('/dashboard/SEMINYAK/BATTERE',['as' => 'smy_battere', 'uses' =>'DataController@indexsmybattere']);
Route::get('/dashboard/SEMINYAK/BATTERE/tambah','DataController@tambahsmybattere');
Route::post('/dashboard/SEMINYAK/BATTERE/store','DataController@storesmybattere');
Route::post('/dashboard/SEMINYAK/BATTERE/update','DataController@updatesmybattere');

// ==========SUKAWATI==========
Route::get('/dashboard/SUKAWATI/PLN',['as' => 'swi_pln', 'uses' =>'DataController@indexswipln']);
Route::get('/dashboard/SUKAWATI/PLN/tambah','DataController@tambahswipln');
Route::post('/dashboard/SUKAWATI/PLN/store','DataController@storeswipln');
Route::post('/dashboard/SUKAWATI/PLN/update','DataController@updateswipln');

Route::get('/dashboard/SUKAWATI/AC',['as' => 'swi_ac', 'uses' =>'DataController@indexswiac']);
Route::get('/dashboard/SUKAWATI/AC/tambah','DataController@tambahswiac');
Route::post('/dashboard/SUKAWATI/AC/store','DataController@storeswiac');
Route::post('/dashboard/SUKAWATI/AC/update','DataController@updateswiac');

Route::get('/dashboard/SUKAWATI/GENERATOR',['as' => 'swi_generator', 'uses' =>'DataController@indexswigenerator']);
Route::get('/dashboard/SUKAWATI/GENERATOR/tambah','DataController@tambahswigenerator');
Route::post('/dashboard/SUKAWATI/GENERATOR/store','DataController@storeswigenerator');
Route::post('/dashboard/SUKAWATI/GENERATOR/update','DataController@updateswigenerator');

Route::get('/dashboard/SUKAWATI/RECTIFIER',['as' => 'swi_rectifier', 'uses' =>'DataController@indexswirectifier']);
Route::get('/dashboard/SUKAWATI/RECTIFIER/tambah','DataController@tambahswirectifier');
Route::post('/dashboard/SUKAWATI/RECTIFIER/store','DataController@storeswirectifier');
Route::post('/dashboard/SUKAWATI/RECTIFIER/update','DataController@updateswirectifier');

Route::get('/dashboard/SUKAWATI/BATTERE',['as' => 'swi_battere', 'uses' =>'DataController@indexswibattere']);
Route::get('/dashboard/SUKAWATI/BATTERE/tambah','DataController@tambahswibattere');
Route::post('/dashboard/SUKAWATI/BATTERE/store','DataController@storeswibattere');
Route::post('/dashboard/SUKAWATI/BATTERE/update','DataController@updateswibattere');

// ==========TOHPATI==========
Route::get('/dashboard/TOHPATI/PLN',['as' => 'top_pln', 'uses' =>'DataController@indextoppln']);
Route::get('/dashboard/TOHPATI/PLN/tambah','DataController@tambahtoppln');
Route::post('/dashboard/TOHPATI/PLN/store','DataController@storetoppln');
Route::post('/dashboard/TOHPATI/PLN/update','DataController@updatetoppln');

Route::get('/dashboard/TOHPATI/AC',['as' => 'top_ac', 'uses' =>'DataController@indextopac']);
Route::get('/dashboard/TOHPATI/AC/tambah','DataController@tambahtopac');
Route::post('/dashboard/TOHPATI/AC/store','DataController@storetopac');
Route::post('/dashboard/TOHPATI/AC/update','DataController@updatetopac');

Route::get('/dashboard/TOHPATI/GENERATOR',['as' => 'top_generator', 'uses' =>'DataController@indextopgenerator']);
Route::get('/dashboard/TOHPATI/GENERATOR/tambah','DataController@tambahtopgenerator');
Route::post('/dashboard/TOHPATI/GENERATOR/store','DataController@storetopgenerator');
Route::post('/dashboard/TOHPATI/GENERATOR/update','DataController@updatetopgenerator');

Route::get('/dashboard/TOHPATI/RECTIFIER',['as' => 'top_rectifier', 'uses' =>'DataController@indextoprectifier']);
Route::get('/dashboard/TOHPATI/RECTIFIER/tambah','DataController@tambahtoprectifier');
Route::post('/dashboard/TOHPATI/RECTIFIER/store','DataController@storetoprectifier');
Route::post('/dashboard/TOHPATI/RECTIFIER/update','DataController@updatetoprectifier');

Route::get('/dashboard/TOHPATI/BATTERE',['as' => 'top_battere', 'uses' =>'DataController@indextopbattere']);
Route::get('/dashboard/TOHPATI/BATTERE/tambah','DataController@tambahtopbattere');
Route::post('/dashboard/TOHPATI/BATTERE/store','DataController@storetopbattere');
Route::post('/dashboard/TOHPATI/BATTERE/update','DataController@updatetopbattere');

// ==========UBUNG==========
Route::get('/dashboard/UBUNG/PLN',['as' => 'ubn_pln', 'uses' =>'DataController@indexubnpln']);
Route::get('/dashboard/UBUNG/PLN/tambah','DataController@tambahubnpln');
Route::post('/dashboard/UBUNG/PLN/store','DataController@storeubnpln');
Route::post('/dashboard/UBUNG/PLN/update','DataController@updateubnpln');

Route::get('/dashboard/UBUNG/AC',['as' => 'ubn_ac', 'uses' =>'DataController@indexubnac']);
Route::get('/dashboard/UBUNG/AC/tambah','DataController@tambahubnac');
Route::post('/dashboard/UBUNG/AC/store','DataController@storeubnac');
Route::post('/dashboard/UBUNG/AC/update','DataController@updateubnac');

Route::get('/dashboard/UBUNG/GENERATOR',['as' => 'ubn_generator', 'uses' =>'DataController@indexubngenerator']);
Route::get('/dashboard/UBUNG/GENERATOR/tambah','DataController@tambahubngenerator');
Route::post('/dashboard/UBUNG/GENERATOR/store','DataController@storeubngenerator');
Route::post('/dashboard/UBUNG/GENERATOR/update','DataController@updateubngenerator');

Route::get('/dashboard/UBUNG/RECTIFIER',['as' => 'ubn_rectifier', 'uses' =>'DataController@indexubnrectifier']);
Route::get('/dashboard/UBUNG/RECTIFIER/tambah','DataController@tambahubnrectifier');
Route::post('/dashboard/UBUNG/RECTIFIER/store','DataController@storeubnrectifier');
Route::post('/dashboard/UBUNG/RECTIFIER/update','DataController@updateubnrectifier');

Route::get('/dashboard/UBUNG/BATTERE',['as' => 'ubn_battere', 'uses' =>'DataController@indexubnbattere']);
Route::get('/dashboard/UBUNG/BATTERE/tambah','DataController@tambahubnbattere');
Route::post('/dashboard/UBUNG/BATTERE/store','DataController@storeubnbattere');
Route::post('/dashboard/UBUNG/BATTERE/update','DataController@updateubnbattere');

// ==========NUSA DUA==========
Route::get('/dashboard/NUSA DUA/PLN',['as' => 'nsd_pln', 'uses' =>'DataController@indexnsdpln']);
Route::get('/dashboard/NUSA DUA/PLN/tambah','DataController@tambahnsdpln');
Route::post('/dashboard/NUSA DUA/PLN/store','DataController@storensdpln');
Route::post('/dashboard/NUSA DUA/PLN/update','DataController@updatensdpln');

Route::get('/dashboard/NUSA DUA/AC',['as' => 'nsd_ac', 'uses' =>'DataController@indexnsdac']);
Route::get('/dashboard/NUSA DUA/AC/tambah','DataController@tambahnsdac');
Route::post('/dashboard/NUSA DUA/AC/store','DataController@storensdac');
Route::post('/dashboard/NUSA DUA/AC/update','DataController@updatensdac');

Route::get('/dashboard/NUSA DUA/GENERATOR',['as' => 'nsd_generator', 'uses' =>'DataController@indexnsdgenerator']);
Route::get('/dashboard/NUSA DUA/GENERATOR/tambah','DataController@tambahnsdgenerator');
Route::post('/dashboard/NUSA DUA/GENERATOR/store','DataController@storensdgenerator');
Route::post('/dashboard/NUSA DUA/GENERATOR/update','DataController@updatensdgenerator');

Route::get('/dashboard/NUSA DUA/RECTIFIER',['as' => 'nsd_rectifier', 'uses' =>'DataController@indexnsdrectifier']);
Route::get('/dashboard/NUSA DUA/RECTIFIER/tambah','DataController@tambahnsdrectifier');
Route::post('/dashboard/NUSA DUA/RECTIFIER/store','DataController@storensdrectifier');
Route::post('/dashboard/NUSA DUA/RECTIFIER/update','DataController@updatensdrectifier');

Route::get('/dashboard/NUSA DUA/BATTERE',['as' => 'nsd_battere', 'uses' =>'DataController@indexnsdbattere']);
Route::get('/dashboard/NUSA DUA/BATTERE/tambah','DataController@tambahnsdbattere');
Route::post('/dashboard/NUSA DUA/BATTERE/store','DataController@storensdbattere');
Route::post('/dashboard/NUSA DUA/BATTERE/update','DataController@updatensdbattere');











// ==========AMBULU==========
Route::get('/dashboard/AMBULU/PLN',['as' => 'abl_pln', 'uses' =>'DataController@indexablpln']);
Route::get('/dashboard/AMBULU/PLN/tambah','DataController@tambahablpln');
Route::post('/dashboard/AMBULU/PLN/store','DataController@storeablpln');
Route::post('/dashboard/AMBULU/PLN/update','DataController@updateablpln');

Route::get('/dashboard/AMBULU/AC',['as' => 'abl_ac', 'uses' =>'DataController@indexablac']);
Route::get('/dashboard/AMBULU/AC/tambah','DataController@tambahablac');
Route::post('/dashboard/AMBULU/AC/store','DataController@storeablac');
Route::post('/dashboard/AMBULU/AC/update','DataController@updateablac');

Route::get('/dashboard/AMBULU/GENERATOR',['as' => 'abl_generator', 'uses' =>'DataController@indexablgenerator']);
Route::get('/dashboard/AMBULU/GENERATOR/tambah','DataController@tambahablgenerator');
Route::post('/dashboard/AMBULU/GENERATOR/store','DataController@storeablgenerator');
Route::post('/dashboard/AMBULU/GENERATOR/update','DataController@updateablgenerator');

Route::get('/dashboard/AMBULU/RECTIFIER',['as' => 'abl_rectifier', 'uses' =>'DataController@indexablrectifier']);
Route::get('/dashboard/AMBULU/RECTIFIER/tambah','DataController@tambahablrectifier');
Route::post('/dashboard/AMBULU/RECTIFIER/store','DataController@storeablrectifier');
Route::post('/dashboard/AMBULU/RECTIFIER/update','DataController@updateablrectifier');

Route::get('/dashboard/AMBULU/BATTERE',['as' => 'abl_battere', 'uses' =>'DataController@indexablbattere']);
Route::get('/dashboard/AMBULU/BATTERE/tambah','DataController@tambahablbattere');
Route::post('/dashboard/AMBULU/BATTERE/store','DataController@storeablbattere');
Route::post('/dashboard/AMBULU/BATTERE/update','DataController@updateablbattere');






// ==========ASEMBAGUS==========
Route::get('/dashboard/ASEMBAGUS/PLN',['as' => 'asb_pln', 'uses' =>'DataController@indexasbpln']);
Route::get('/dashboard/ASEMBAGUS/PLN/tambah','DataController@tambahasbpln');
Route::post('/dashboard/ASEMBAGUS/PLN/store','DataController@storeasbpln');
Route::post('/dashboard/ASEMBAGUS/PLN/update','DataController@updateasbpln');

Route::get('/dashboard/ASEMBAGUS/AC',['as' => 'asb_ac', 'uses' =>'DataController@indexasbac']);
Route::get('/dashboard/ASEMBAGUS/AC/tambah','DataController@tambahasbac');
Route::post('/dashboard/ASEMBAGUS/AC/store','DataController@storeasbac');
Route::post('/dashboard/ASEMBAGUS/AC/update','DataController@updateasbac');

Route::get('/dashboard/ASEMBAGUS/GENERATOR',['as' => 'asb_generator', 'uses' =>'DataController@indexasbgenerator']);
Route::get('/dashboard/ASEMBAGUS/GENERATOR/tambah','DataController@tambahasbgenerator');
Route::post('/dashboard/ASEMBAGUS/GENERATOR/store','DataController@storeasbgenerator');
Route::post('/dashboard/ASEMBAGUS/GENERATOR/update','DataController@updateasbgenerator');

Route::get('/dashboard/ASEMBAGUS/RECTIFIER',['as' => 'asb_rectifier', 'uses' =>'DataController@indexasbrectifier']);
Route::get('/dashboard/ASEMBAGUS/RECTIFIER/tambah','DataController@tambahasbrectifier');
Route::post('/dashboard/ASEMBAGUS/RECTIFIER/store','DataController@storeasbrectifier');
Route::post('/dashboard/ASEMBAGUS/RECTIFIER/update','DataController@updateasbrectifier');

Route::get('/dashboard/ASEMBAGUS/BATTERE',['as' => 'asb_battere', 'uses' =>'DataController@indexasbbattere']);
Route::get('/dashboard/ASEMBAGUS/BATTERE/tambah','DataController@tambahasbbattere');
Route::post('/dashboard/ASEMBAGUS/BATTERE/store','DataController@storeasbbattere');
Route::post('/dashboard/ASEMBAGUS/BATTERE/update','DataController@updateasbbattere');

// ==========BENCULUK==========
Route::get('/dashboard/BENCULUK/PLN',['as' => 'bck_pln', 'uses' =>'DataController@indexbckpln']);
Route::get('/dashboard/BENCULUK/PLN/tambah','DataController@tambahbckpln');
Route::post('/dashboard/BENCULUK/PLN/store','DataController@storebckpln');
Route::post('/dashboard/BENCULUK/PLN/update','DataController@updatebckpln');

Route::get('/dashboard/BENCULUK/AC',['as' => 'bck_ac', 'uses' =>'DataController@indexbckac']);
Route::get('/dashboard/BENCULUK/AC/tambah','DataController@tambahbckac');
Route::post('/dashboard/BENCULUK/AC/store','DataController@storebckac');
Route::post('/dashboard/BENCULUK/AC/update','DataController@updatebckac');

Route::get('/dashboard/BENCULUK/GENERATOR',['as' => 'bck_generator', 'uses' =>'DataController@indexbckgenerator']);
Route::get('/dashboard/BENCULUK/GENERATOR/tambah','DataController@tambahbckgenerator');
Route::post('/dashboard/BENCULUK/GENERATOR/store','DataController@storebckgenerator');
Route::post('/dashboard/BENCULUK/GENERATOR/update','DataController@updatebckgenerator');

Route::get('/dashboard/BENCULUK/RECTIFIER',['as' => 'bck_rectifier', 'uses' =>'DataController@indexbckrectifier']);
Route::get('/dashboard/BENCULUK/RECTIFIER/tambah','DataController@tambahbckrectifier');
Route::post('/dashboard/BENCULUK/RECTIFIER/store','DataController@storebckrectifier');
Route::post('/dashboard/BENCULUK/RECTIFIER/update','DataController@updatebckrectifier');

Route::get('/dashboard/BENCULUK/BATTERE',['as' => 'bck_battere', 'uses' =>'DataController@indexbckbattere']);
Route::get('/dashboard/BENCULUK/BATTERE/tambah','DataController@tambahbckbattere');
Route::post('/dashboard/BENCULUK/BATTERE/store','DataController@storebckbattere');
Route::post('/dashboard/BENCULUK/BATTERE/update','DataController@updatebckbattere');

// ==========BESUKI==========
Route::get('/dashboard/BESUKI/PLN',['as' => 'bki_pln', 'uses' =>'DataController@indexbkipln']);
Route::get('/dashboard/BESUKI/PLN/tambah','DataController@tambahbkipln');
Route::post('/dashboard/BESUKI/PLN/store','DataController@storebkipln');
Route::post('/dashboard/BESUKI/PLN/update','DataController@updatebkipln');

Route::get('/dashboard/BESUKI/AC',['as' => 'bki_ac', 'uses' =>'DataController@indexbkiac']);
Route::get('/dashboard/BESUKI/AC/tambah','DataController@tambahbkiac');
Route::post('/dashboard/BESUKI/AC/store','DataController@storebkiac');
Route::post('/dashboard/BESUKI/AC/update','DataController@updatebkiac');

Route::get('/dashboard/BESUKI/GENERATOR',['as' => 'bki_generator', 'uses' =>'DataController@indexbkigenerator']);
Route::get('/dashboard/BESUKI/GENERATOR/tambah','DataController@tambahbkigenerator');
Route::post('/dashboard/BESUKI/GENERATOR/store','DataController@storebkigenerator');
Route::post('/dashboard/BESUKI/GENERATOR/update','DataController@updatebkigenerator');

Route::get('/dashboard/BESUKI/RECTIFIER',['as' => 'bki_rectifier', 'uses' =>'DataController@indexbkirectifier']);
Route::get('/dashboard/BESUKI/RECTIFIER/tambah','DataController@tambahbkirectifier');
Route::post('/dashboard/BESUKI/RECTIFIER/store','DataController@storebkirectifier');
Route::post('/dashboard/BESUKI/RECTIFIER/update','DataController@updatebkirectifier');

Route::get('/dashboard/BESUKI/BATTERE',['as' => 'bki_battere', 'uses' =>'DataController@indexbkibattere']);
Route::get('/dashboard/BESUKI/BATTERE/tambah','DataController@tambahbkibattere');
Route::post('/dashboard/BESUKI/BATTERE/store','DataController@storebkibattere');
Route::post('/dashboard/BESUKI/BATTERE/update','DataController@updatebkibattere');

// ==========BONDOWOSO==========
Route::get('/dashboard/BONDOWOSO/PLN',['as' => 'bow_pln', 'uses' =>'DataController@indexbowpln']);
Route::get('/dashboard/BONDOWOSO/PLN/tambah','DataController@tambahbowpln');
Route::post('/dashboard/BONDOWOSO/PLN/store','DataController@storebowpln');
Route::post('/dashboard/BONDOWOSO/PLN/update','DataController@updatebowpln');

Route::get('/dashboard/BONDOWOSO/AC',['as' => 'bow_ac', 'uses' =>'DataController@indexbowac']);
Route::get('/dashboard/BONDOWOSO/AC/tambah','DataController@tambahbowac');
Route::post('/dashboard/BONDOWOSO/AC/store','DataController@storebowac');
Route::post('/dashboard/BONDOWOSO/AC/update','DataController@updatebowac');

Route::get('/dashboard/BONDOWOSO/GENERATOR',['as' => 'bow_generator', 'uses' =>'DataController@indexbowgenerator']);
Route::get('/dashboard/BONDOWOSO/GENERATOR/tambah','DataController@tambahbowgenerator');
Route::post('/dashboard/BONDOWOSO/GENERATOR/store','DataController@storebowgenerator');
Route::post('/dashboard/BONDOWOSO/GENERATOR/update','DataController@updatebowgenerator');

Route::get('/dashboard/BONDOWOSO/RECTIFIER',['as' => 'bow_rectifier', 'uses' =>'DataController@indexbowrectifier']);
Route::get('/dashboard/BONDOWOSO/RECTIFIER/tambah','DataController@tambahbowrectifier');
Route::post('/dashboard/BONDOWOSO/RECTIFIER/store','DataController@storebowrectifier');
Route::post('/dashboard/BONDOWOSO/RECTIFIER/update','DataController@updatebowrectifier');

Route::get('/dashboard/BONDOWOSO/BATTERE',['as' => 'bow_battere', 'uses' =>'DataController@indexbowbattere']);
Route::get('/dashboard/BONDOWOSO/BATTERE/tambah','DataController@tambahbowbattere');
Route::post('/dashboard/BONDOWOSO/BATTERE/store','DataController@storebowbattere');
Route::post('/dashboard/BONDOWOSO/BATTERE/update','DataController@updatebowbattere');

// ==========BALUNG==========
Route::get('/dashboard/BALUNG/PLN',['as' => 'bug_pln', 'uses' =>'DataController@indexbugpln']);
Route::get('/dashboard/BALUNG/PLN/tambah','DataController@tambahbugpln');
Route::post('/dashboard/BALUNG/PLN/store','DataController@storebugpln');
Route::post('/dashboard/BALUNG/PLN/update','DataController@updatebugpln');

Route::get('/dashboard/BALUNG/AC',['as' => 'bug_ac', 'uses' =>'DataController@indexbugac']);
Route::get('/dashboard/BALUNG/AC/tambah','DataController@tambahbugac');
Route::post('/dashboard/BALUNG/AC/store','DataController@storebugac');
Route::post('/dashboard/BALUNG/AC/update','DataController@updatebugac');

Route::get('/dashboard/BALUNG/GENERATOR',['as' => 'bug_generator', 'uses' =>'DataController@indexbuggenerator']);
Route::get('/dashboard/BALUNG/GENERATOR/tambah','DataController@tambahbuggenerator');
Route::post('/dashboard/BALUNG/GENERATOR/store','DataController@storebuggenerator');
Route::post('/dashboard/BALUNG/GENERATOR/update','DataController@updatebuggenerator');

Route::get('/dashboard/BALUNG/RECTIFIER',['as' => 'bug_rectifier', 'uses' =>'DataController@indexbugrectifier']);
Route::get('/dashboard/BALUNG/RECTIFIER/tambah','DataController@tambahbugrectifier');
Route::post('/dashboard/BALUNG/RECTIFIER/store','DataController@storebugrectifier');
Route::post('/dashboard/BALUNG/RECTIFIER/update','DataController@updatebugrectifier');

Route::get('/dashboard/BALUNG/BATTERE',['as' => 'bug_battere', 'uses' =>'DataController@indexbugbattere']);
Route::get('/dashboard/BALUNG/BATTERE/tambah','DataController@tambahbugbattere');
Route::post('/dashboard/BALUNG/BATTERE/store','DataController@storebugbattere');
Route::post('/dashboard/BALUNG/BATTERE/update','DataController@updatebugbattere');

// ==========BANYUWANGI==========
Route::get('/dashboard/BANYUWANGI/PLN',['as' => 'bwg_pln', 'uses' =>'DataController@indexbwgpln']);
Route::get('/dashboard/BANYUWANGI/PLN/tambah','DataController@tambahbwgpln');
Route::post('/dashboard/BANYUWANGI/PLN/store','DataController@storebwgpln');
Route::post('/dashboard/BANYUWANGI/PLN/update','DataController@updatebwgpln');

Route::get('/dashboard/BANYUWANGI/AC',['as' => 'bwg_ac', 'uses' =>'DataController@indexbwgac']);
Route::get('/dashboard/BANYUWANGI/AC/tambah','DataController@tambahbwgac');
Route::post('/dashboard/BANYUWANGI/AC/store','DataController@storebwgac');
Route::post('/dashboard/BANYUWANGI/AC/update','DataController@updatebwgac');

Route::get('/dashboard/BANYUWANGI/GENERATOR',['as' => 'bwg_generator', 'uses' =>'DataController@indexbwggenerator']);
Route::get('/dashboard/BANYUWANGI/GENERATOR/tambah','DataController@tambahbwggenerator');
Route::post('/dashboard/BANYUWANGI/GENERATOR/store','DataController@storebwggenerator');
Route::post('/dashboard/BANYUWANGI/GENERATOR/update','DataController@updatebwggenerator');

Route::get('/dashboard/BANYUWANGI/RECTIFIER',['as' => 'bwg_rectifier', 'uses' =>'DataController@indexbwgrectifier']);
Route::get('/dashboard/BANYUWANGI/RECTIFIER/tambah','DataController@tambahbwgrectifier');
Route::post('/dashboard/BANYUWANGI/RECTIFIER/store','DataController@storebwgrectifier');
Route::post('/dashboard/BANYUWANGI/RECTIFIER/update','DataController@updatebwgrectifier');

Route::get('/dashboard/BANYUWANGI/BATTERE',['as' => 'bwg_battere', 'uses' =>'DataController@indexbwgbattere']);
Route::get('/dashboard/BANYUWANGI/BATTERE/tambah','DataController@tambahbwgbattere');
Route::post('/dashboard/BANYUWANGI/BATTERE/store','DataController@storebwgbattere');
Route::post('/dashboard/BANYUWANGI/BATTERE/update','DataController@updatebwgbattere');

// ==========GENTENG==========
Route::get('/dashboard/GENTENG/PLN',['as' => 'gen_pln', 'uses' =>'DataController@indexgenpln']);
Route::get('/dashboard/GENTENG/PLN/tambah','DataController@tambahgenpln');
Route::post('/dashboard/GENTENG/PLN/store','DataController@storegenpln');
Route::post('/dashboard/GENTENG/PLN/update','DataController@updategenpln');

Route::get('/dashboard/GENTENG/AC',['as' => 'gen_ac', 'uses' =>'DataController@indexgenac']);
Route::get('/dashboard/GENTENG/AC/tambah','DataController@tambahgenac');
Route::post('/dashboard/GENTENG/AC/store','DataController@storegenac');
Route::post('/dashboard/GENTENG/AC/update','DataController@updategenac');

Route::get('/dashboard/GENTENG/GENERATOR',['as' => 'gen_generator', 'uses' =>'DataController@indexgengenerator']);
Route::get('/dashboard/GENTENG/GENERATOR/tambah','DataController@tambahgengenerator');
Route::post('/dashboard/GENTENG/GENERATOR/store','DataController@storegengenerator');
Route::post('/dashboard/GENTENG/GENERATOR/update','DataController@updategengenerator');

Route::get('/dashboard/GENTENG/RECTIFIER',['as' => 'gen_rectifier', 'uses' =>'DataController@indexgenrectifier']);
Route::get('/dashboard/GENTENG/RECTIFIER/tambah','DataController@tambahgenrectifier');
Route::post('/dashboard/GENTENG/RECTIFIER/store','DataController@storegenrectifier');
Route::post('/dashboard/GENTENG/RECTIFIER/update','DataController@updategenrectifier');

Route::get('/dashboard/GENTENG/BATTERE',['as' => 'gen_battere', 'uses' =>'DataController@indexgenbattere']);
Route::get('/dashboard/GENTENG/BATTERE/tambah','DataController@tambahgenbattere');
Route::post('/dashboard/GENTENG/BATTERE/store','DataController@storegenbattere');
Route::post('/dashboard/GENTENG/BATTERE/update','DataController@updategenbattere');

// ==========JENGGAWAH==========
Route::get('/dashboard/JENGGAWAH/PLN',['as' => 'jgw_pln', 'uses' =>'DataController@indexjgwpln']);
Route::get('/dashboard/JENGGAWAH/PLN/tambah','DataController@tambahjgwpln');
Route::post('/dashboard/JENGGAWAH/PLN/store','DataController@storejgwpln');
Route::post('/dashboard/JENGGAWAH/PLN/update','DataController@updatejgwpln');

Route::get('/dashboard/JENGGAWAH/AC',['as' => 'jgw_ac', 'uses' =>'DataController@indexjgwac']);
Route::get('/dashboard/JENGGAWAH/AC/tambah','DataController@tambahjgwac');
Route::post('/dashboard/JENGGAWAH/AC/store','DataController@storejgwac');
Route::post('/dashboard/JENGGAWAH/AC/update','DataController@updatejgwac');

Route::get('/dashboard/JENGGAWAH/GENERATOR',['as' => 'jgw_generator', 'uses' =>'DataController@indexjgwgenerator']);
Route::get('/dashboard/JENGGAWAH/GENERATOR/tambah','DataController@tambahjgwgenerator');
Route::post('/dashboard/JENGGAWAH/GENERATOR/store','DataController@storejgwgenerator');
Route::post('/dashboard/JENGGAWAH/GENERATOR/update','DataController@updatejgwgenerator');

Route::get('/dashboard/JENGGAWAH/RECTIFIER',['as' => 'jgw_rectifier', 'uses' =>'DataController@indexjgwrectifier']);
Route::get('/dashboard/JENGGAWAH/RECTIFIER/tambah','DataController@tambahjgwrectifier');
Route::post('/dashboard/JENGGAWAH/RECTIFIER/store','DataController@storejgwrectifier');
Route::post('/dashboard/JENGGAWAH/RECTIFIER/update','DataController@updatejgwrectifier');

Route::get('/dashboard/JENGGAWAH/BATTERE',['as' => 'jgw_battere', 'uses' =>'DataController@indexjgwbattere']);
Route::get('/dashboard/JENGGAWAH/BATTERE/tambah','DataController@tambahjgwbattere');
Route::post('/dashboard/JENGGAWAH/BATTERE/store','DataController@storejgwbattere');
Route::post('/dashboard/JENGGAWAH/BATTERE/update','DataController@updatejgwbattere');

// ==========KALIBARU==========
Route::get('/dashboard/KALIBARU/PLN',['as' => 'kbr_pln', 'uses' =>'DataController@indexkbrpln']);
Route::get('/dashboard/KALIBARU/PLN/tambah','DataController@tambahkbrpln');
Route::post('/dashboard/KALIBARU/PLN/store','DataController@storekbrpln');
Route::post('/dashboard/KALIBARU/PLN/update','DataController@updatekbrpln');

Route::get('/dashboard/KALIBARU/AC',['as' => 'kbr_ac', 'uses' =>'DataController@indexkbrac']);
Route::get('/dashboard/KALIBARU/AC/tambah','DataController@tambahkbrac');
Route::post('/dashboard/KALIBARU/AC/store','DataController@storekbrac');
Route::post('/dashboard/KALIBARU/AC/update','DataController@updatekbrac');

Route::get('/dashboard/KALIBARU/GENERATOR',['as' => 'kbr_generator', 'uses' =>'DataController@indexkbrgenerator']);
Route::get('/dashboard/KALIBARU/GENERATOR/tambah','DataController@tambahkbrgenerator');
Route::post('/dashboard/KALIBARU/GENERATOR/store','DataController@storekbrgenerator');
Route::post('/dashboard/KALIBARU/GENERATOR/update','DataController@updatekbrgenerator');

Route::get('/dashboard/KALIBARU/RECTIFIER',['as' => 'kbr_rectifier', 'uses' =>'DataController@indexkbrrectifier']);
Route::get('/dashboard/KALIBARU/RECTIFIER/tambah','DataController@tambahkbrrectifier');
Route::post('/dashboard/KALIBARU/RECTIFIER/store','DataController@storekbrrectifier');
Route::post('/dashboard/KALIBARU/RECTIFIER/update','DataController@updatekbrrectifier');

Route::get('/dashboard/KALIBARU/BATTERE',['as' => 'kbr_battere', 'uses' =>'DataController@indexkbrbattere']);
Route::get('/dashboard/KALIBARU/BATTERE/tambah','DataController@tambahkbrbattere');
Route::post('/dashboard/KALIBARU/BATTERE/store','DataController@storekbrbattere');
Route::post('/dashboard/KALIBARU/BATTERE/update','DataController@updatekbrbattere');

// ==========KETAPANG==========
Route::get('/dashboard/KETAPANG/PLN',['as' => 'ket_pln', 'uses' =>'DataController@indexketpln']);
Route::get('/dashboard/KETAPANG/PLN/tambah','DataController@tambahketpln');
Route::post('/dashboard/KETAPANG/PLN/store','DataController@storeketpln');
Route::post('/dashboard/KETAPANG/PLN/update','DataController@updateketpln');

Route::get('/dashboard/KETAPANG/AC',['as' => 'ket_ac', 'uses' =>'DataController@indexketac']);
Route::get('/dashboard/KETAPANG/AC/tambah','DataController@tambahketac');
Route::post('/dashboard/KETAPANG/AC/store','DataController@storeketac');
Route::post('/dashboard/KETAPANG/AC/update','DataController@updateketac');

Route::get('/dashboard/KETAPANG/GENERATOR',['as' => 'ket_generator', 'uses' =>'DataController@indexketgenerator']);
Route::get('/dashboard/KETAPANG/GENERATOR/tambah','DataController@tambahketgenerator');
Route::post('/dashboard/KETAPANG/GENERATOR/store','DataController@storeketgenerator');
Route::post('/dashboard/KETAPANG/GENERATOR/update','DataController@updateketgenerator');

Route::get('/dashboard/KETAPANG/RECTIFIER',['as' => 'ket_rectifier', 'uses' =>'DataController@indexketrectifier']);
Route::get('/dashboard/KETAPANG/RECTIFIER/tambah','DataController@tambahketrectifier');
Route::post('/dashboard/KETAPANG/RECTIFIER/store','DataController@storeketrectifier');
Route::post('/dashboard/KETAPANG/RECTIFIER/update','DataController@updateketrectifier');

Route::get('/dashboard/KETAPANG/BATTERE',['as' => 'ket_battere', 'uses' =>'DataController@indexketbattere']);
Route::get('/dashboard/KETAPANG/BATTERE/tambah','DataController@tambahketbattere');
Route::post('/dashboard/KETAPANG/BATTERE/store','DataController@storeketbattere');
Route::post('/dashboard/KETAPANG/BATTERE/update','DataController@updateketbattere');

// ==========KALISAT==========
Route::get('/dashboard/KALISAT/PLN',['as' => 'klt_pln', 'uses' =>'DataController@indexkltpln']);
Route::get('/dashboard/KALISAT/PLN/tambah','DataController@tambahkltpln');
Route::post('/dashboard/KALISAT/PLN/store','DataController@storekltpln');
Route::post('/dashboard/KALISAT/PLN/update','DataController@updatekltpln');

Route::get('/dashboard/KALISAT/AC',['as' => 'klt_ac', 'uses' =>'DataController@indexkltac']);
Route::get('/dashboard/KALISAT/AC/tambah','DataController@tambahkltac');
Route::post('/dashboard/KALISAT/AC/store','DataController@storekltac');
Route::post('/dashboard/KALISAT/AC/update','DataController@updatekltac');

Route::get('/dashboard/KALISAT/GENERATOR',['as' => 'klt_generator', 'uses' =>'DataController@indexkltgenerator']);
Route::get('/dashboard/KALISAT/GENERATOR/tambah','DataController@tambahkltgenerator');
Route::post('/dashboard/KALISAT/GENERATOR/store','DataController@storekltgenerator');
Route::post('/dashboard/KALISAT/GENERATOR/update','DataController@updatekltgenerator');

Route::get('/dashboard/KALISAT/RECTIFIER',['as' => 'klt_rectifier', 'uses' =>'DataController@indexkltrectifier']);
Route::get('/dashboard/KALISAT/RECTIFIER/tambah','DataController@tambahkltrectifier');
Route::post('/dashboard/KALISAT/RECTIFIER/store','DataController@storekltrectifier');
Route::post('/dashboard/KALISAT/RECTIFIER/update','DataController@updatekltrectifier');

Route::get('/dashboard/KALISAT/BATTERE',['as' => 'klt_battere', 'uses' =>'DataController@indexkltbattere']);
Route::get('/dashboard/KALISAT/BATTERE/tambah','DataController@tambahkltbattere');
Route::post('/dashboard/KALISAT/BATTERE/store','DataController@storekltbattere');
Route::post('/dashboard/KALISAT/BATTERE/update','DataController@updatekltbattere');

// ==========KENCONG==========
Route::get('/dashboard/KENCONG/PLN',['as' => 'kno_pln', 'uses' =>'DataController@indexknopln']);
Route::get('/dashboard/KENCONG/PLN/tambah','DataController@tambahknopln');
Route::post('/dashboard/KENCONG/PLN/store','DataController@storeknopln');
Route::post('/dashboard/KENCONG/PLN/update','DataController@updateknopln');

Route::get('/dashboard/KENCONG/AC',['as' => 'kno_ac', 'uses' =>'DataController@indexknoac']);
Route::get('/dashboard/KENCONG/AC/tambah','DataController@tambahknoac');
Route::post('/dashboard/KENCONG/AC/store','DataController@storeknoac');
Route::post('/dashboard/KENCONG/AC/update','DataController@updateknoac');

Route::get('/dashboard/KENCONG/GENERATOR',['as' => 'kno_generator', 'uses' =>'DataController@indexknogenerator']);
Route::get('/dashboard/KENCONG/GENERATOR/tambah','DataController@tambahknogenerator');
Route::post('/dashboard/KENCONG/GENERATOR/store','DataController@storeknogenerator');
Route::post('/dashboard/KENCONG/GENERATOR/update','DataController@updateknogenerator');

Route::get('/dashboard/KENCONG/RECTIFIER',['as' => 'kno_rectifier', 'uses' =>'DataController@indexknorectifier']);
Route::get('/dashboard/KENCONG/RECTIFIER/tambah','DataController@tambahknorectifier');
Route::post('/dashboard/KENCONG/RECTIFIER/store','DataController@storeknorectifier');
Route::post('/dashboard/KENCONG/RECTIFIER/update','DataController@updateknorectifier');

Route::get('/dashboard/KENCONG/BATTERE',['as' => 'kno_battere', 'uses' =>'DataController@indexknobattere']);
Route::get('/dashboard/KENCONG/BATTERE/tambah','DataController@tambahknobattere');
Route::post('/dashboard/KENCONG/BATTERE/store','DataController@storeknobattere');
Route::post('/dashboard/KENCONG/BATTERE/update','DataController@updateknobattere');

// ==========MUNCAR==========
Route::get('/dashboard/MUNCAR/PLN',['as' => 'mcr_pln', 'uses' =>'DataController@indexmcrpln']);
Route::get('/dashboard/MUNCAR/PLN/tambah','DataController@tambahmcrpln');
Route::post('/dashboard/MUNCAR/PLN/store','DataController@storemcrpln');
Route::post('/dashboard/MUNCAR/PLN/update','DataController@updatemcrpln');

Route::get('/dashboard/MUNCAR/AC',['as' => 'mcr_ac', 'uses' =>'DataController@indexmcrac']);
Route::get('/dashboard/MUNCAR/AC/tambah','DataController@tambahmcrac');
Route::post('/dashboard/MUNCAR/AC/store','DataController@storemcrac');
Route::post('/dashboard/MUNCAR/AC/update','DataController@updatemcrac');

Route::get('/dashboard/MUNCAR/GENERATOR',['as' => 'mcr_generator', 'uses' =>'DataController@indexmcrgenerator']);
Route::get('/dashboard/MUNCAR/GENERATOR/tambah','DataController@tambahmcrgenerator');
Route::post('/dashboard/MUNCAR/GENERATOR/store','DataController@storemcrgenerator');
Route::post('/dashboard/MUNCAR/GENERATOR/update','DataController@updatemcrgenerator');

Route::get('/dashboard/MUNCAR/RECTIFIER',['as' => 'mcr_rectifier', 'uses' =>'DataController@indexmcrrectifier']);
Route::get('/dashboard/MUNCAR/RECTIFIER/tambah','DataController@tambahmcrrectifier');
Route::post('/dashboard/MUNCAR/RECTIFIER/store','DataController@storemcrrectifier');
Route::post('/dashboard/MUNCAR/RECTIFIER/update','DataController@updatemcrrectifier');

Route::get('/dashboard/MUNCAR/BATTERE',['as' => 'mcr_battere', 'uses' =>'DataController@indexmcrbattere']);
Route::get('/dashboard/MUNCAR/BATTERE/tambah','DataController@tambahmcrbattere');
Route::post('/dashboard/MUNCAR/BATTERE/store','DataController@storemcrbattere');
Route::post('/dashboard/MUNCAR/BATTERE/update','DataController@updatemcrbattere');

// ==========MLANDINGAN==========
Route::get('/dashboard/MLANDINGAN/PLN',['as' => 'mld_pln', 'uses' =>'DataController@indexmldpln']);
Route::get('/dashboard/MLANDINGAN/PLN/tambah','DataController@tambahmldpln');
Route::post('/dashboard/MLANDINGAN/PLN/store','DataController@storemldpln');
Route::post('/dashboard/MLANDINGAN/PLN/update','DataController@updatemldpln');

Route::get('/dashboard/MLANDINGAN/AC',['as' => 'mld_ac', 'uses' =>'DataController@indexmldac']);
Route::get('/dashboard/MLANDINGAN/AC/tambah','DataController@tambahmldac');
Route::post('/dashboard/MLANDINGAN/AC/store','DataController@storemldac');
Route::post('/dashboard/MLANDINGAN/AC/update','DataController@updatemldac');

Route::get('/dashboard/MLANDINGAN/GENERATOR',['as' => 'mld_generator', 'uses' =>'DataController@indexmldgenerator']);
Route::get('/dashboard/MLANDINGAN/GENERATOR/tambah','DataController@tambahmldgenerator');
Route::post('/dashboard/MLANDINGAN/GENERATOR/store','DataController@storemldgenerator');
Route::post('/dashboard/MLANDINGAN/GENERATOR/update','DataController@updatemldgenerator');

Route::get('/dashboard/MLANDINGAN/RECTIFIER',['as' => 'mld_rectifier', 'uses' =>'DataController@indexmldrectifier']);
Route::get('/dashboard/MLANDINGAN/RECTIFIER/tambah','DataController@tambahmldrectifier');
Route::post('/dashboard/MLANDINGAN/RECTIFIER/store','DataController@storemldrectifier');
Route::post('/dashboard/MLANDINGAN/RECTIFIER/update','DataController@updatemldrectifier');

Route::get('/dashboard/MLANDINGAN/BATTERE',['as' => 'mld_battere', 'uses' =>'DataController@indexmldbattere']);
Route::get('/dashboard/MLANDINGAN/BATTERE/tambah','DataController@tambahmldbattere');
Route::post('/dashboard/MLANDINGAN/BATTERE/store','DataController@storemldbattere');
Route::post('/dashboard/MLANDINGAN/BATTERE/update','DataController@updatemldbattere');

// ==========PRAJEKAN==========
Route::get('/dashboard/PRAJEKAN/PLN',['as' => 'prj_pln', 'uses' =>'DataController@indexprjpln']);
Route::get('/dashboard/PRAJEKAN/PLN/tambah','DataController@tambahprjpln');
Route::post('/dashboard/PRAJEKAN/PLN/store','DataController@storeprjpln');
Route::post('/dashboard/PRAJEKAN/PLN/update','DataController@updateprjpln');

Route::get('/dashboard/PRAJEKAN/AC',['as' => 'prj_ac', 'uses' =>'DataController@indexprjac']);
Route::get('/dashboard/PRAJEKAN/AC/tambah','DataController@tambahprjac');
Route::post('/dashboard/PRAJEKAN/AC/store','DataController@storeprjac');
Route::post('/dashboard/PRAJEKAN/AC/update','DataController@updateprjac');

Route::get('/dashboard/PRAJEKAN/GENERATOR',['as' => 'prj_generator', 'uses' =>'DataController@indexprjgenerator']);
Route::get('/dashboard/PRAJEKAN/GENERATOR/tambah','DataController@tambahprjgenerator');
Route::post('/dashboard/PRAJEKAN/GENERATOR/store','DataController@storeprjgenerator');
Route::post('/dashboard/PRAJEKAN/GENERATOR/update','DataController@updateprjgenerator');

Route::get('/dashboard/PRAJEKAN/RECTIFIER',['as' => 'prj_rectifier', 'uses' =>'DataController@indexprjrectifier']);
Route::get('/dashboard/PRAJEKAN/RECTIFIER/tambah','DataController@tambahprjrectifier');
Route::post('/dashboard/PRAJEKAN/RECTIFIER/store','DataController@storeprjrectifier');
Route::post('/dashboard/PRAJEKAN/RECTIFIER/update','DataController@updateprjrectifier');

Route::get('/dashboard/PRAJEKAN/BATTERE',['as' => 'prj_battere', 'uses' =>'DataController@indexprjbattere']);
Route::get('/dashboard/PRAJEKAN/BATTERE/tambah','DataController@tambahprjbattere');
Route::post('/dashboard/PRAJEKAN/BATTERE/store','DataController@storeprjbattere');
Route::post('/dashboard/PRAJEKAN/BATTERE/update','DataController@updateprjbattere');

// ==========PESANGGARAN==========
Route::get('/dashboard/PESANGGARAN/PLN',['as' => 'psg_pln', 'uses' =>'DataController@indexpsgpln']);
Route::get('/dashboard/PESANGGARAN/PLN/tambah','DataController@tambahpsgpln');
Route::post('/dashboard/PESANGGARAN/PLN/store','DataController@storepsgpln');
Route::post('/dashboard/PESANGGARAN/PLN/update','DataController@updatepsgpln');

Route::get('/dashboard/PESANGGARAN/AC',['as' => 'psg_ac', 'uses' =>'DataController@indexpsgac']);
Route::get('/dashboard/PESANGGARAN/AC/tambah','DataController@tambahpsgac');
Route::post('/dashboard/PESANGGARAN/AC/store','DataController@storepsgac');
Route::post('/dashboard/PESANGGARAN/AC/update','DataController@updatepsgac');

Route::get('/dashboard/PESANGGARAN/GENERATOR',['as' => 'psg_generator', 'uses' =>'DataController@indexpsggenerator']);
Route::get('/dashboard/PESANGGARAN/GENERATOR/tambah','DataController@tambahpsggenerator');
Route::post('/dashboard/PESANGGARAN/GENERATOR/store','DataController@storepsggenerator');
Route::post('/dashboard/PESANGGARAN/GENERATOR/update','DataController@updatepsggenerator');

Route::get('/dashboard/PESANGGARAN/RECTIFIER',['as' => 'psg_rectifier', 'uses' =>'DataController@indexpsgrectifier']);
Route::get('/dashboard/PESANGGARAN/RECTIFIER/tambah','DataController@tambahpsgrectifier');
Route::post('/dashboard/PESANGGARAN/RECTIFIER/store','DataController@storepsgrectifier');
Route::post('/dashboard/PESANGGARAN/RECTIFIER/update','DataController@updatepsgrectifier');

Route::get('/dashboard/PESANGGARAN/BATTERE',['as' => 'psg_battere', 'uses' =>'DataController@indexpsgbattere']);
Route::get('/dashboard/PESANGGARAN/BATTERE/tambah','DataController@tambahpsgbattere');
Route::post('/dashboard/PESANGGARAN/BATTERE/store','DataController@storepsgbattere');
Route::post('/dashboard/PESANGGARAN/BATTERE/update','DataController@updatepsgbattere');

// ==========PUGER==========
Route::get('/dashboard/PUGER/PLN',['as' => 'pug_pln', 'uses' =>'DataController@indexpugpln']);
Route::get('/dashboard/PUGER/PLN/tambah','DataController@tambahpugpln');
Route::post('/dashboard/PUGER/PLN/store','DataController@storepugpln');
Route::post('/dashboard/PUGER/PLN/update','DataController@updatepugpln');

Route::get('/dashboard/PUGER/AC',['as' => 'pug_ac', 'uses' =>'DataController@indexpugac']);
Route::get('/dashboard/PUGER/AC/tambah','DataController@tambahpugac');
Route::post('/dashboard/PUGER/AC/store','DataController@storepugac');
Route::post('/dashboard/PUGER/AC/update','DataController@updatepugac');

Route::get('/dashboard/PUGER/GENERATOR',['as' => 'pug_generator', 'uses' =>'DataController@indexpuggenerator']);
Route::get('/dashboard/PUGER/GENERATOR/tambah','DataController@tambahpuggenerator');
Route::post('/dashboard/PUGER/GENERATOR/store','DataController@storepuggenerator');
Route::post('/dashboard/PUGER/GENERATOR/update','DataController@updatepuggenerator');

Route::get('/dashboard/PUGER/RECTIFIER',['as' => 'pug_rectifier', 'uses' =>'DataController@indexpugrectifier']);
Route::get('/dashboard/PUGER/RECTIFIER/tambah','DataController@tambahpugrectifier');
Route::post('/dashboard/PUGER/RECTIFIER/store','DataController@storepugrectifier');
Route::post('/dashboard/PUGER/RECTIFIER/update','DataController@updatepugrectifier');

Route::get('/dashboard/PUGER/BATTERE',['as' => 'pug_battere', 'uses' =>'DataController@indexpugbattere']);
Route::get('/dashboard/PUGER/BATTERE/tambah','DataController@tambahpugbattere');
Route::post('/dashboard/PUGER/BATTERE/store','DataController@storepugbattere');
Route::post('/dashboard/PUGER/BATTERE/update','DataController@updatepugbattere');

// ==========RAMBIPUJI==========
Route::get('/dashboard/RAMBIPUJI/PLN',['as' => 'rbp_pln', 'uses' =>'DataController@indexrbppln']);
Route::get('/dashboard/RAMBIPUJI/PLN/tambah','DataController@tambahrbppln');
Route::post('/dashboard/RAMBIPUJI/PLN/store','DataController@storerbppln');
Route::post('/dashboard/RAMBIPUJI/PLN/update','DataController@updaterbppln');

Route::get('/dashboard/RAMBIPUJI/AC',['as' => 'rbp_ac', 'uses' =>'DataController@indexrbpac']);
Route::get('/dashboard/RAMBIPUJI/AC/tambah','DataController@tambahrbpac');
Route::post('/dashboard/RAMBIPUJI/AC/store','DataController@storerbpac');
Route::post('/dashboard/RAMBIPUJI/AC/update','DataController@updaterbpac');

Route::get('/dashboard/RAMBIPUJI/GENERATOR',['as' => 'rbp_generator', 'uses' =>'DataController@indexrbpgenerator']);
Route::get('/dashboard/RAMBIPUJI/GENERATOR/tambah','DataController@tambahrbpgenerator');
Route::post('/dashboard/RAMBIPUJI/GENERATOR/store','DataController@storerbpgenerator');
Route::post('/dashboard/RAMBIPUJI/GENERATOR/update','DataController@updaterbpgenerator');

Route::get('/dashboard/RAMBIPUJI/RECTIFIER',['as' => 'rbp_rectifier', 'uses' =>'DataController@indexrbprectifier']);
Route::get('/dashboard/RAMBIPUJI/RECTIFIER/tambah','DataController@tambahrbprectifier');
Route::post('/dashboard/RAMBIPUJI/RECTIFIER/store','DataController@storerbprectifier');
Route::post('/dashboard/RAMBIPUJI/RECTIFIER/update','DataController@updaterbprectifier');

Route::get('/dashboard/RAMBIPUJI/BATTERE',['as' => 'rbp_battere', 'uses' =>'DataController@indexrbpbattere']);
Route::get('/dashboard/RAMBIPUJI/BATTERE/tambah','DataController@tambahrbpbattere');
Route::post('/dashboard/RAMBIPUJI/BATTERE/store','DataController@storerbpbattere');
Route::post('/dashboard/RAMBIPUJI/BATTERE/update','DataController@updaterbpbattere');

// ==========ROGOJAMPI==========
Route::get('/dashboard/ROGOJAMPI/PLN',['as' => 'rgj_pln', 'uses' =>'DataController@indexrgjpln']);
Route::get('/dashboard/ROGOJAMPI/PLN/tambah','DataController@tambahrgjpln');
Route::post('/dashboard/ROGOJAMPI/PLN/store','DataController@storergjpln');
Route::post('/dashboard/ROGOJAMPI/PLN/update','DataController@updatergjpln');

Route::get('/dashboard/ROGOJAMPI/AC',['as' => 'rgj_ac', 'uses' =>'DataController@indexrgjac']);
Route::get('/dashboard/ROGOJAMPI/AC/tambah','DataController@tambahrgjac');
Route::post('/dashboard/ROGOJAMPI/AC/store','DataController@storergjac');
Route::post('/dashboard/ROGOJAMPI/AC/update','DataController@updatergjac');

Route::get('/dashboard/ROGOJAMPI/GENERATOR',['as' => 'rgj_generator', 'uses' =>'DataController@indexrgjgenerator']);
Route::get('/dashboard/ROGOJAMPI/GENERATOR/tambah','DataController@tambahrgjgenerator');
Route::post('/dashboard/ROGOJAMPI/GENERATOR/store','DataController@storergjgenerator');
Route::post('/dashboard/ROGOJAMPI/GENERATOR/update','DataController@updatergjgenerator');

Route::get('/dashboard/ROGOJAMPI/RECTIFIER',['as' => 'rgj_rectifier', 'uses' =>'DataController@indexrgjrectifier']);
Route::get('/dashboard/ROGOJAMPI/RECTIFIER/tambah','DataController@tambahrgjrectifier');
Route::post('/dashboard/ROGOJAMPI/RECTIFIER/store','DataController@storergjrectifier');
Route::post('/dashboard/ROGOJAMPI/RECTIFIER/update','DataController@updatergjrectifier');

Route::get('/dashboard/ROGOJAMPI/BATTERE',['as' => 'rgj_battere', 'uses' =>'DataController@indexrgjbattere']);
Route::get('/dashboard/ROGOJAMPI/BATTERE/tambah','DataController@tambahrgjbattere');
Route::post('/dashboard/ROGOJAMPI/BATTERE/store','DataController@storergjbattere');
Route::post('/dashboard/ROGOJAMPI/BATTERE/update','DataController@updatergjbattere');

// ==========SITUBONDO==========
Route::get('/dashboard/SITUBONDO/PLN',['as' => 'sit_pln', 'uses' =>'DataController@indexsitpln']);
Route::get('/dashboard/SITUBONDO/PLN/tambah','DataController@tambahsitpln');
Route::post('/dashboard/SITUBONDO/PLN/store','DataController@storesitpln');
Route::post('/dashboard/SITUBONDO/PLN/update','DataController@updatesitpln');

Route::get('/dashboard/SITUBONDO/AC',['as' => 'sit_ac', 'uses' =>'DataController@indexsitac']);
Route::get('/dashboard/SITUBONDO/AC/tambah','DataController@tambahsitac');
Route::post('/dashboard/SITUBONDO/AC/store','DataController@storesitac');
Route::post('/dashboard/SITUBONDO/AC/update','DataController@updatesitac');

Route::get('/dashboard/SITUBONDO/GENERATOR',['as' => 'sit_generator', 'uses' =>'DataController@indexsitgenerator']);
Route::get('/dashboard/SITUBONDO/GENERATOR/tambah','DataController@tambahsitgenerator');
Route::post('/dashboard/SITUBONDO/GENERATOR/store','DataController@storesitgenerator');
Route::post('/dashboard/SITUBONDO/GENERATOR/update','DataController@updatesitgenerator');

Route::get('/dashboard/SITUBONDO/RECTIFIER',['as' => 'sit_rectifier', 'uses' =>'DataController@indexsitrectifier']);
Route::get('/dashboard/SITUBONDO/RECTIFIER/tambah','DataController@tambahsitrectifier');
Route::post('/dashboard/SITUBONDO/RECTIFIER/store','DataController@storesitrectifier');
Route::post('/dashboard/SITUBONDO/RECTIFIER/update','DataController@updatesitrectifier');

Route::get('/dashboard/SITUBONDO/BATTERE',['as' => 'sit_battere', 'uses' =>'DataController@indexsitbattere']);
Route::get('/dashboard/SITUBONDO/BATTERE/tambah','DataController@tambahsitbattere');
Route::post('/dashboard/SITUBONDO/BATTERE/store','DataController@storesitbattere');
Route::post('/dashboard/SITUBONDO/BATTERE/update','DataController@updatesitbattere');

// ==========SUKOSARI==========
Route::get('/dashboard/SUKOSARI/PLN',['as' => 'sks_pln', 'uses' =>'DataController@indexskspln']);
Route::get('/dashboard/SUKOSARI/PLN/tambah','DataController@tambahskspln');
Route::post('/dashboard/SUKOSARI/PLN/store','DataController@storeskspln');
Route::post('/dashboard/SUKOSARI/PLN/update','DataController@updateskspln');

Route::get('/dashboard/SUKOSARI/AC',['as' => 'sks_ac', 'uses' =>'DataController@indexsksac']);
Route::get('/dashboard/SUKOSARI/AC/tambah','DataController@tambahsksac');
Route::post('/dashboard/SUKOSARI/AC/store','DataController@storesksac');
Route::post('/dashboard/SUKOSARI/AC/update','DataController@updatesksac');

Route::get('/dashboard/SUKOSARI/GENERATOR',['as' => 'sks_generator', 'uses' =>'DataController@indexsksgenerator']);
Route::get('/dashboard/SUKOSARI/GENERATOR/tambah','DataController@tambahsksgenerator');
Route::post('/dashboard/SUKOSARI/GENERATOR/store','DataController@storesksgenerator');
Route::post('/dashboard/SUKOSARI/GENERATOR/update','DataController@updatesksgenerator');

Route::get('/dashboard/SUKOSARI/RECTIFIER',['as' => 'sks_rectifier', 'uses' =>'DataController@indexsksrectifier']);
Route::get('/dashboard/SUKOSARI/RECTIFIER/tambah','DataController@tambahsksrectifier');
Route::post('/dashboard/SUKOSARI/RECTIFIER/store','DataController@storesksrectifier');
Route::post('/dashboard/SUKOSARI/RECTIFIER/update','DataController@updatesksrectifier');

Route::get('/dashboard/SUKOSARI/BATTERE',['as' => 'sks_battere', 'uses' =>'DataController@indexsksbattere']);
Route::get('/dashboard/SUKOSARI/BATTERE/tambah','DataController@tambahsksbattere');
Route::post('/dashboard/SUKOSARI/BATTERE/store','DataController@storesksbattere');
Route::post('/dashboard/SUKOSARI/BATTERE/update','DataController@updatesksbattere');

// ==========SUKOWONO==========
Route::get('/dashboard/SUKOWONO/PLN',['as' => 'skw_pln', 'uses' =>'DataController@indexskwpln']);
Route::get('/dashboard/SUKOWONO/PLN/tambah','DataController@tambahskwpln');
Route::post('/dashboard/SUKOWONO/PLN/store','DataController@storeskwpln');
Route::post('/dashboard/SUKOWONO/PLN/update','DataController@updateskwpln');

Route::get('/dashboard/SUKOWONO/AC',['as' => 'skw_ac', 'uses' =>'DataController@indexskwac']);
Route::get('/dashboard/SUKOWONO/AC/tambah','DataController@tambahskwac');
Route::post('/dashboard/SUKOWONO/AC/store','DataController@storeskwac');
Route::post('/dashboard/SUKOWONO/AC/update','DataController@updateskwac');

Route::get('/dashboard/SUKOWONO/GENERATOR',['as' => 'skw_generator', 'uses' =>'DataController@indexskwgenerator']);
Route::get('/dashboard/SUKOWONO/GENERATOR/tambah','DataController@tambahskwgenerator');
Route::post('/dashboard/SUKOWONO/GENERATOR/store','DataController@storeskwgenerator');
Route::post('/dashboard/SUKOWONO/GENERATOR/update','DataController@updateskwgenerator');

Route::get('/dashboard/SUKOWONO/RECTIFIER',['as' => 'skw_rectifier', 'uses' =>'DataController@indexskwrectifier']);
Route::get('/dashboard/SUKOWONO/RECTIFIER/tambah','DataController@tambahskwrectifier');
Route::post('/dashboard/SUKOWONO/RECTIFIER/store','DataController@storeskwrectifier');
Route::post('/dashboard/SUKOWONO/RECTIFIER/update','DataController@updateskwrectifier');

Route::get('/dashboard/SUKOWONO/BATTERE',['as' => 'skw_battere', 'uses' =>'DataController@indexskwbattere']);
Route::get('/dashboard/SUKOWONO/BATTERE/tambah','DataController@tambahskwbattere');
Route::post('/dashboard/SUKOWONO/BATTERE/store','DataController@storeskwbattere');
Route::post('/dashboard/SUKOWONO/BATTERE/update','DataController@updateskwbattere');

// ==========SEMPOLAN==========
Route::get('/dashboard/SEMPOLAN/PLN',['as' => 'spo_pln', 'uses' =>'DataController@indexspopln']);
Route::get('/dashboard/SEMPOLAN/PLN/tambah','DataController@tambahspopln');
Route::post('/dashboard/SEMPOLAN/PLN/store','DataController@storespopln');
Route::post('/dashboard/SEMPOLAN/PLN/update','DataController@updatespopln');

Route::get('/dashboard/SEMPOLAN/AC',['as' => 'spo_ac', 'uses' =>'DataController@indexspoac']);
Route::get('/dashboard/SEMPOLAN/AC/tambah','DataController@tambahspoac');
Route::post('/dashboard/SEMPOLAN/AC/store','DataController@storespoac');
Route::post('/dashboard/SEMPOLAN/AC/update','DataController@updatespoac');

Route::get('/dashboard/SEMPOLAN/GENERATOR',['as' => 'spo_generator', 'uses' =>'DataController@indexspogenerator']);
Route::get('/dashboard/SEMPOLAN/GENERATOR/tambah','DataController@tambahspogenerator');
Route::post('/dashboard/SEMPOLAN/GENERATOR/store','DataController@storespogenerator');
Route::post('/dashboard/SEMPOLAN/GENERATOR/update','DataController@updatespogenerator');

Route::get('/dashboard/SEMPOLAN/RECTIFIER',['as' => 'spo_rectifier', 'uses' =>'DataController@indexsporectifier']);
Route::get('/dashboard/SEMPOLAN/RECTIFIER/tambah','DataController@tambahsporectifier');
Route::post('/dashboard/SEMPOLAN/RECTIFIER/store','DataController@storesporectifier');
Route::post('/dashboard/SEMPOLAN/RECTIFIER/update','DataController@updatesporectifier');

Route::get('/dashboard/SEMPOLAN/BATTERE',['as' => 'spo_battere', 'uses' =>'DataController@indexspobattere']);
Route::get('/dashboard/SEMPOLAN/BATTERE/tambah','DataController@tambahspobattere');
Route::post('/dashboard/SEMPOLAN/BATTERE/store','DataController@storespobattere');
Route::post('/dashboard/SEMPOLAN/BATTERE/update','DataController@updatespobattere');

// ==========TANGGUL==========
Route::get('/dashboard/TANGGUL/PLN',['as' => 'tgu_pln', 'uses' =>'DataController@indextgupln']);
Route::get('/dashboard/TANGGUL/PLN/tambah','DataController@tambahtgupln');
Route::post('/dashboard/TANGGUL/PLN/store','DataController@storetgupln');
Route::post('/dashboard/TANGGUL/PLN/update','DataController@updatetgupln');

Route::get('/dashboard/TANGGUL/AC',['as' => 'tgu_ac', 'uses' =>'DataController@indextguac']);
Route::get('/dashboard/TANGGUL/AC/tambah','DataController@tambahtguac');
Route::post('/dashboard/TANGGUL/AC/store','DataController@storetguac');
Route::post('/dashboard/TANGGUL/AC/update','DataController@updatetguac');

Route::get('/dashboard/TANGGUL/GENERATOR',['as' => 'tgu_generator', 'uses' =>'DataController@indextgugenerator']);
Route::get('/dashboard/TANGGUL/GENERATOR/tambah','DataController@tambahtgugenerator');
Route::post('/dashboard/TANGGUL/GENERATOR/store','DataController@storetgugenerator');
Route::post('/dashboard/TANGGUL/GENERATOR/update','DataController@updatetgugenerator');

Route::get('/dashboard/TANGGUL/RECTIFIER',['as' => 'tgu_rectifier', 'uses' =>'DataController@indextgurectifier']);
Route::get('/dashboard/TANGGUL/RECTIFIER/tambah','DataController@tambahtgurectifier');
Route::post('/dashboard/TANGGUL/RECTIFIER/store','DataController@storetgurectifier');
Route::post('/dashboard/TANGGUL/RECTIFIER/update','DataController@updatetgurectifier');

Route::get('/dashboard/TANGGUL/BATTERE',['as' => 'tgu_battere', 'uses' =>'DataController@indextgubattere']);
Route::get('/dashboard/TANGGUL/BATTERE/tambah','DataController@tambahtgubattere');
Route::post('/dashboard/TANGGUL/BATTERE/store','DataController@storetgubattere');
Route::post('/dashboard/TANGGUL/BATTERE/update','DataController@updatetgubattere');

// ==========WONGSOREJO==========
Route::get('/dashboard/WONGSOREJO/PLN',['as' => 'wso_pln', 'uses' =>'DataController@indexwsopln']);
Route::get('/dashboard/WONGSOREJO/PLN/tambah','DataController@tambahwsopln');
Route::post('/dashboard/WONGSOREJO/PLN/store','DataController@storewsopln');
Route::post('/dashboard/WONGSOREJO/PLN/update','DataController@updatewsopln');

Route::get('/dashboard/WONGSOREJO/AC',['as' => 'wso_ac', 'uses' =>'DataController@indexwsoac']);
Route::get('/dashboard/WONGSOREJO/AC/tambah','DataController@tambahwsoac');
Route::post('/dashboard/WONGSOREJO/AC/store','DataController@storewsoac');
Route::post('/dashboard/WONGSOREJO/AC/update','DataController@updatewsoac');

Route::get('/dashboard/WONGSOREJO/GENERATOR',['as' => 'wso_generator', 'uses' =>'DataController@indexwsogenerator']);
Route::get('/dashboard/WONGSOREJO/GENERATOR/tambah','DataController@tambahwsogenerator');
Route::post('/dashboard/WONGSOREJO/GENERATOR/store','DataController@storewsogenerator');
Route::post('/dashboard/WONGSOREJO/GENERATOR/update','DataController@updatewsogenerator');

Route::get('/dashboard/WONGSOREJO/RECTIFIER',['as' => 'wso_rectifier', 'uses' =>'DataController@indexwsorectifier']);
Route::get('/dashboard/WONGSOREJO/RECTIFIER/tambah','DataController@tambahwsorectifier');
Route::post('/dashboard/WONGSOREJO/RECTIFIER/store','DataController@storewsorectifier');
Route::post('/dashboard/WONGSOREJO/RECTIFIER/update','DataController@updatewsorectifier');

Route::get('/dashboard/WONGSOREJO/BATTERE',['as' => 'wso_battere', 'uses' =>'DataController@indexwsobattere']);
Route::get('/dashboard/WONGSOREJO/BATTERE/tambah','DataController@tambahwsobattere');
Route::post('/dashboard/WONGSOREJO/BATTERE/store','DataController@storewsobattere');
Route::post('/dashboard/WONGSOREJO/BATTERE/update','DataController@updatewsobattere');

// ==========ARJASA JEMBER==========
Route::get('/dashboard/ARJASA JEMBER/PLN',['as' => 'wso_pln', 'uses' =>'DataController@indexwsopln']);
Route::get('/dashboard/ARJASA JEMBER/PLN/tambah','DataController@tambahwsopln');
Route::post('/dashboard/ARJASA JEMBER/PLN/store','DataController@storewsopln');
Route::post('/dashboard/ARJASA JEMBER/PLN/update','DataController@updatewsopln');

Route::get('/dashboard/ARJASA JEMBER/AC',['as' => 'wso_ac', 'uses' =>'DataController@indexwsoac']);
Route::get('/dashboard/ARJASA JEMBER/AC/tambah','DataController@tambahwsoac');
Route::post('/dashboard/ARJASA JEMBER/AC/store','DataController@storewsoac');
Route::post('/dashboard/ARJASA JEMBER/AC/update','DataController@updatewsoac');

Route::get('/dashboard/ARJASA JEMBER/GENERATOR',['as' => 'wso_generator', 'uses' =>'DataController@indexwsogenerator']);
Route::get('/dashboard/ARJASA JEMBER/GENERATOR/tambah','DataController@tambahwsogenerator');
Route::post('/dashboard/ARJASA JEMBER/GENERATOR/store','DataController@storewsogenerator');
Route::post('/dashboard/ARJASA JEMBER/GENERATOR/update','DataController@updatewsogenerator');

Route::get('/dashboard/ARJASA JEMBER/RECTIFIER',['as' => 'wso_rectifier', 'uses' =>'DataController@indexwsorectifier']);
Route::get('/dashboard/ARJASA JEMBER/RECTIFIER/tambah','DataController@tambahwsorectifier');
Route::post('/dashboard/ARJASA JEMBER/RECTIFIER/store','DataController@storewsorectifier');
Route::post('/dashboard/ARJASA JEMBER/RECTIFIER/update','DataController@updatewsorectifier');

Route::get('/dashboard/ARJASA JEMBER/BATTERE',['as' => 'wso_battere', 'uses' =>'DataController@indexwsobattere']);
Route::get('/dashboard/ARJASA JEMBER/BATTERE/tambah','DataController@tambahwsobattere');
Route::post('/dashboard/ARJASA JEMBER/BATTERE/store','DataController@storewsobattere');
Route::post('/dashboard/ARJASA JEMBER/BATTERE/update','DataController@updatewsobattere');

// ==========COKRO JEMBER==========
Route::get('/dashboard/COKRO JEMBER/PLN',['as' => 'wso_pln', 'uses' =>'DataController@indexwsopln']);
Route::get('/dashboard/COKRO JEMBER/PLN/tambah','DataController@tambahwsopln');
Route::post('/dashboard/COKRO JEMBER/PLN/store','DataController@storewsopln');
Route::post('/dashboard/COKRO JEMBER/PLN/update','DataController@updatewsopln');

Route::get('/dashboard/COKRO JEMBER/AC',['as' => 'wso_ac', 'uses' =>'DataController@indexwsoac']);
Route::get('/dashboard/COKRO JEMBER/AC/tambah','DataController@tambahwsoac');
Route::post('/dashboard/COKRO JEMBER/AC/store','DataController@storewsoac');
Route::post('/dashboard/COKRO JEMBER/AC/update','DataController@updatewsoac');

Route::get('/dashboard/COKRO JEMBER/GENERATOR',['as' => 'wso_generator', 'uses' =>'DataController@indexwsogenerator']);
Route::get('/dashboard/COKRO JEMBER/GENERATOR/tambah','DataController@tambahwsogenerator');
Route::post('/dashboard/COKRO JEMBER/GENERATOR/store','DataController@storewsogenerator');
Route::post('/dashboard/COKRO JEMBER/GENERATOR/update','DataController@updatewsogenerator');

Route::get('/dashboard/COKRO JEMBER/RECTIFIER',['as' => 'wso_rectifier', 'uses' =>'DataController@indexwsorectifier']);
Route::get('/dashboard/COKRO JEMBER/RECTIFIER/tambah','DataController@tambahwsorectifier');
Route::post('/dashboard/COKRO JEMBER/RECTIFIER/store','DataController@storewsorectifier');
Route::post('/dashboard/COKRO JEMBER/RECTIFIER/update','DataController@updatewsorectifier');

Route::get('/dashboard/COKRO JEMBER/BATTERE',['as' => 'wso_battere', 'uses' =>'DataController@indexwsobattere']);
Route::get('/dashboard/COKRO JEMBER/BATTERE/tambah','DataController@tambahwsobattere');
Route::post('/dashboard/COKRO JEMBER/BATTERE/store','DataController@storewsobattere');
Route::post('/dashboard/COKRO JEMBER/BATTERE/update','DataController@updatewsobattere');

// ==========KEBONSARI JEMBER==========
Route::get('/dashboard/KEBONSARI JEMBER/PLN',['as' => 'wso_pln', 'uses' =>'DataController@indexwsopln']);
Route::get('/dashboard/KEBONSARI JEMBER/PLN/tambah','DataController@tambahwsopln');
Route::post('/dashboard/KEBONSARI JEMBER/PLN/store','DataController@storewsopln');
Route::post('/dashboard/KEBONSARI JEMBER/PLN/update','DataController@updatewsopln');

Route::get('/dashboard/KEBONSARI JEMBER/AC',['as' => 'wso_ac', 'uses' =>'DataController@indexwsoac']);
Route::get('/dashboard/KEBONSARI JEMBER/AC/tambah','DataController@tambahwsoac');
Route::post('/dashboard/KEBONSARI JEMBER/AC/store','DataController@storewsoac');
Route::post('/dashboard/KEBONSARI JEMBER/AC/update','DataController@updatewsoac');

Route::get('/dashboard/KEBONSARI JEMBER/GENERATOR',['as' => 'wso_generator', 'uses' =>'DataController@indexwsogenerator']);
Route::get('/dashboard/KEBONSARI JEMBER/GENERATOR/tambah','DataController@tambahwsogenerator');
Route::post('/dashboard/KEBONSARI JEMBER/GENERATOR/store','DataController@storewsogenerator');
Route::post('/dashboard/KEBONSARI JEMBER/GENERATOR/update','DataController@updatewsogenerator');

Route::get('/dashboard/KEBONSARI JEMBER/RECTIFIER',['as' => 'wso_rectifier', 'uses' =>'DataController@indexwsorectifier']);
Route::get('/dashboard/KEBONSARI JEMBER/RECTIFIER/tambah','DataController@tambahwsorectifier');
Route::post('/dashboard/KEBONSARI JEMBER/RECTIFIER/store','DataController@storewsorectifier');
Route::post('/dashboard/KEBONSARI JEMBER/RECTIFIER/update','DataController@updatewsorectifier');

Route::get('/dashboard/KEBONSARI JEMBER/BATTERE',['as' => 'wso_battere', 'uses' =>'DataController@indexwsobattere']);
Route::get('/dashboard/KEBONSARI JEMBER/BATTERE/tambah','DataController@tambahwsobattere');
Route::post('/dashboard/KEBONSARI JEMBER/BATTERE/store','DataController@storewsobattere');
Route::post('/dashboard/KEBONSARI JEMBER/BATTERE/update','DataController@updatewsobattere');








// ==========BLITAR==========
Route::get('/dashboard/BLITAR/PLN',['as' => 'blr_pln', 'uses' =>'DataController@indexblrpln']);
Route::get('/dashboard/BLITAR/PLN/tambah','DataController@tambahblrpln');
Route::post('/dashboard/BLITAR/PLN/store','DataController@storeblrpln');
Route::post('/dashboard/BLITAR/PLN/update','DataController@updateblrpln');

Route::get('/dashboard/BLITAR/AC',['as' => 'blr_ac', 'uses' =>'DataController@indexblrac']);
Route::get('/dashboard/BLITAR/AC/tambah','DataController@tambahblrac');
Route::post('/dashboard/BLITAR/AC/store','DataController@storeblrac');
Route::post('/dashboard/BLITAR/AC/update','DataController@updateblrac');

Route::get('/dashboard/BLITAR/GENERATOR',['as' => 'blr_generator', 'uses' =>'DataController@indexblrgenerator']);
Route::get('/dashboard/BLITAR/GENERATOR/tambah','DataController@tambahblrgenerator');
Route::post('/dashboard/BLITAR/GENERATOR/store','DataController@storeblrgenerator');
Route::post('/dashboard/BLITAR/GENERATOR/update','DataController@updateblrgenerator');

Route::get('/dashboard/BLITAR/RECTIFIER',['as' => 'blr_rectifier', 'uses' =>'DataController@indexblrrectifier']);
Route::get('/dashboard/BLITAR/RECTIFIER/tambah','DataController@tambahblrrectifier');
Route::post('/dashboard/BLITAR/RECTIFIER/store','DataController@storeblrrectifier');
Route::post('/dashboard/BLITAR/RECTIFIER/update','DataController@updateblrrectifier');

Route::get('/dashboard/BLITAR/BATTERE',['as' => 'blr_battere', 'uses' =>'DataController@indexblrbattere']);
Route::get('/dashboard/BLITAR/BATTERE/tambah','DataController@tambahblrbattere');
Route::post('/dashboard/BLITAR/BATTERE/store','DataController@storeblrbattere');
Route::post('/dashboard/BLITAR/BATTERE/update','DataController@updateblrbattere');

// ==========CAMPUR DARAT==========
Route::get('/dashboard/CAMPUR DARAT/PLN',['as' => 'cat_pln', 'uses' =>'DataController@indexcatpln']);
Route::get('/dashboard/CAMPUR DARAT/PLN/tambah','DataController@tambahcatpln');
Route::post('/dashboard/CAMPUR DARAT/PLN/store','DataController@storecatpln');
Route::post('/dashboard/CAMPUR DARAT/PLN/update','DataController@updatecatpln');

Route::get('/dashboard/CAMPUR DARAT/AC',['as' => 'cat_ac', 'uses' =>'DataController@indexcatac']);
Route::get('/dashboard/CAMPUR DARAT/AC/tambah','DataController@tambahcatac');
Route::post('/dashboard/CAMPUR DARAT/AC/store','DataController@storecatac');
Route::post('/dashboard/CAMPUR DARAT/AC/update','DataController@updatecatac');

Route::get('/dashboard/CAMPUR DARAT/GENERATOR',['as' => 'cat_generator', 'uses' =>'DataController@indexcatgenerator']);
Route::get('/dashboard/CAMPUR DARAT/GENERATOR/tambah','DataController@tambahcatgenerator');
Route::post('/dashboard/CAMPUR DARAT/GENERATOR/store','DataController@storecatgenerator');
Route::post('/dashboard/CAMPUR DARAT/GENERATOR/update','DataController@updatecatgenerator');

Route::get('/dashboard/CAMPUR DARAT/RECTIFIER',['as' => 'cat_rectifier', 'uses' =>'DataController@indexcatrectifier']);
Route::get('/dashboard/CAMPUR DARAT/RECTIFIER/tambah','DataController@tambahcatrectifier');
Route::post('/dashboard/CAMPUR DARAT/RECTIFIER/store','DataController@storecatrectifier');
Route::post('/dashboard/CAMPUR DARAT/RECTIFIER/update','DataController@updatecatrectifier');

Route::get('/dashboard/CAMPUR DARAT/BATTERE',['as' => 'cat_battere', 'uses' =>'DataController@indexcatbattere']);
Route::get('/dashboard/CAMPUR DARAT/BATTERE/tambah','DataController@tambahcatbattere');
Route::post('/dashboard/CAMPUR DARAT/BATTERE/store','DataController@storecatbattere');
Route::post('/dashboard/CAMPUR DARAT/BATTERE/update','DataController@updatecatbattere');

// ==========DURENAN==========
Route::get('/dashboard/DURENAN/PLN',['as' => 'drn_pln', 'uses' =>'DataController@indexdrnpln']);
Route::get('/dashboard/DURENAN/PLN/tambah','DataController@tambahdrnpln');
Route::post('/dashboard/DURENAN/PLN/store','DataController@storedrnpln');
Route::post('/dashboard/DURENAN/PLN/update','DataController@updatedrnpln');

Route::get('/dashboard/DURENAN/AC',['as' => 'drn_ac', 'uses' =>'DataController@indexdrnac']);
Route::get('/dashboard/DURENAN/AC/tambah','DataController@tambahdrnac');
Route::post('/dashboard/DURENAN/AC/store','DataController@storedrnac');
Route::post('/dashboard/DURENAN/AC/update','DataController@updatedrnac');

Route::get('/dashboard/DURENAN/GENERATOR',['as' => 'drn_generator', 'uses' =>'DataController@indexdrngenerator']);
Route::get('/dashboard/DURENAN/GENERATOR/tambah','DataController@tambahdrngenerator');
Route::post('/dashboard/DURENAN/GENERATOR/store','DataController@storedrngenerator');
Route::post('/dashboard/DURENAN/GENERATOR/update','DataController@updatedrngenerator');

Route::get('/dashboard/DURENAN/RECTIFIER',['as' => 'drn_rectifier', 'uses' =>'DataController@indexdrnrectifier']);
Route::get('/dashboard/DURENAN/RECTIFIER/tambah','DataController@tambahdrnrectifier');
Route::post('/dashboard/DURENAN/RECTIFIER/store','DataController@storedrnrectifier');
Route::post('/dashboard/DURENAN/RECTIFIER/update','DataController@updatedrnrectifier');

Route::get('/dashboard/DURENAN/BATTERE',['as' => 'drn_battere', 'uses' =>'DataController@indexdrnbattere']);
Route::get('/dashboard/DURENAN/BATTERE/tambah','DataController@tambahdrnbattere');
Route::post('/dashboard/DURENAN/BATTERE/store','DataController@storedrnbattere');
Route::post('/dashboard/DURENAN/BATTERE/update','DataController@updatedrnbattere');

// ==========GONDANG==========
Route::get('/dashboard/GONDANG/PLN',['as' => 'gon_pln', 'uses' =>'DataController@indexgonpln']);
Route::get('/dashboard/GONDANG/PLN/tambah','DataController@tambahgonpln');
Route::post('/dashboard/GONDANG/PLN/store','DataController@storegonpln');
Route::post('/dashboard/GONDANG/PLN/update','DataController@updategonpln');

Route::get('/dashboard/GONDANG/AC',['as' => 'gon_ac', 'uses' =>'DataController@indexgonac']);
Route::get('/dashboard/GONDANG/AC/tambah','DataController@tambahgonac');
Route::post('/dashboard/GONDANG/AC/store','DataController@storegonac');
Route::post('/dashboard/GONDANG/AC/update','DataController@updategonac');

Route::get('/dashboard/GONDANG/GENERATOR',['as' => 'gon_generator', 'uses' =>'DataController@indexgongenerator']);
Route::get('/dashboard/GONDANG/GENERATOR/tambah','DataController@tambahgongenerator');
Route::post('/dashboard/GONDANG/GENERATOR/store','DataController@storegongenerator');
Route::post('/dashboard/GONDANG/GENERATOR/update','DataController@updategongenerator');

Route::get('/dashboard/GONDANG/RECTIFIER',['as' => 'gon_rectifier', 'uses' =>'DataController@indexgonrectifier']);
Route::get('/dashboard/GONDANG/RECTIFIER/tambah','DataController@tambahgonrectifier');
Route::post('/dashboard/GONDANG/RECTIFIER/store','DataController@storegonrectifier');
Route::post('/dashboard/GONDANG/RECTIFIER/update','DataController@updategonrectifier');

Route::get('/dashboard/GONDANG/BATTERE',['as' => 'gon_battere', 'uses' =>'DataController@indexgonbattere']);
Route::get('/dashboard/GONDANG/BATTERE/tambah','DataController@tambahgonbattere');
Route::post('/dashboard/GONDANG/BATTERE/store','DataController@storegonbattere');
Route::post('/dashboard/GONDANG/BATTERE/update','DataController@updategonbattere');

// ==========GURAH==========
Route::get('/dashboard/GURAH/PLN',['as' => 'gur_pln', 'uses' =>'DataController@indexgurpln']);
Route::get('/dashboard/GURAH/PLN/tambah','DataController@tambahgurpln');
Route::post('/dashboard/GURAH/PLN/store','DataController@storegurpln');
Route::post('/dashboard/GURAH/PLN/update','DataController@updategurpln');

Route::get('/dashboard/GURAH/AC',['as' => 'gur_ac', 'uses' =>'DataController@indexgurac']);
Route::get('/dashboard/GURAH/AC/tambah','DataController@tambahgurac');
Route::post('/dashboard/GURAH/AC/store','DataController@storegurac');
Route::post('/dashboard/GURAH/AC/update','DataController@updategurac');

Route::get('/dashboard/GURAH/GENERATOR',['as' => 'gur_generator', 'uses' =>'DataController@indexgurgenerator']);
Route::get('/dashboard/GURAH/GENERATOR/tambah','DataController@tambahgurgenerator');
Route::post('/dashboard/GURAH/GENERATOR/store','DataController@storegurgenerator');
Route::post('/dashboard/GURAH/GENERATOR/update','DataController@updategurgenerator');

Route::get('/dashboard/GURAH/RECTIFIER',['as' => 'gur_rectifier', 'uses' =>'DataController@indexgurrectifier']);
Route::get('/dashboard/GURAH/RECTIFIER/tambah','DataController@tambahgurrectifier');
Route::post('/dashboard/GURAH/RECTIFIER/store','DataController@storegurrectifier');
Route::post('/dashboard/GURAH/RECTIFIER/update','DataController@updategurrectifier');

Route::get('/dashboard/GURAH/BATTERE',['as' => 'gur_battere', 'uses' =>'DataController@indexgurbattere']);
Route::get('/dashboard/GURAH/BATTERE/tambah','DataController@tambahgurbattere');
Route::post('/dashboard/GURAH/BATTERE/store','DataController@storegurbattere');
Route::post('/dashboard/GURAH/BATTERE/update','DataController@updategurbattere');

// ==========KANDANGAN KEDIRI==========
Route::get('/dashboard/KANDANGAN KEDIRI/PLN',['as' => 'kaa_pln', 'uses' =>'DataController@indexkaapln']);
Route::get('/dashboard/KANDANGAN KEDIRI/PLN/tambah','DataController@tambahkaapln');
Route::post('/dashboard/KANDANGAN KEDIRI/PLN/store','DataController@storekaapln');
Route::post('/dashboard/KANDANGAN KEDIRI/PLN/update','DataController@updatekaapln');

Route::get('/dashboard/KANDANGAN KEDIRI/AC',['as' => 'kaa_ac', 'uses' =>'DataController@indexkaaac']);
Route::get('/dashboard/KANDANGAN KEDIRI/AC/tambah','DataController@tambahkaaac');
Route::post('/dashboard/KANDANGAN KEDIRI/AC/store','DataController@storekaaac');
Route::post('/dashboard/KANDANGAN KEDIRI/AC/update','DataController@updatekaaac');

Route::get('/dashboard/KANDANGAN KEDIRI/GENERATOR',['as' => 'kaa_generator', 'uses' =>'DataController@indexkaagenerator']);
Route::get('/dashboard/KANDANGAN KEDIRI/GENERATOR/tambah','DataController@tambahkaagenerator');
Route::post('/dashboard/KANDANGAN KEDIRI/GENERATOR/store','DataController@storekaagenerator');
Route::post('/dashboard/KANDANGAN KEDIRI/GENERATOR/update','DataController@updatekaagenerator');

Route::get('/dashboard/KANDANGAN KEDIRI/RECTIFIER',['as' => 'kaa_rectifier', 'uses' =>'DataController@indexkaarectifier']);
Route::get('/dashboard/KANDANGAN KEDIRI/RECTIFIER/tambah','DataController@tambahkaarectifier');
Route::post('/dashboard/KANDANGAN KEDIRI/RECTIFIER/store','DataController@storekaarectifier');
Route::post('/dashboard/KANDANGAN KEDIRI/RECTIFIER/update','DataController@updatekaarectifier');

Route::get('/dashboard/KANDANGAN KEDIRI/BATTERE',['as' => 'kaa_battere', 'uses' =>'DataController@indexkaabattere']);
Route::get('/dashboard/KANDANGAN KEDIRI/BATTERE/tambah','DataController@tambahkaabattere');
Route::post('/dashboard/KANDANGAN KEDIRI/BATTERE/store','DataController@storekaabattere');
Route::post('/dashboard/KANDANGAN KEDIRI/BATTERE/update','DataController@updatekaabattere');

// ==========KESAMBEN==========
Route::get('/dashboard/KESAMBEN/PLN',['as' => 'kbn_pln', 'uses' =>'DataController@indexkbnpln']);
Route::get('/dashboard/KESAMBEN/PLN/tambah','DataController@tambahkbnpln');
Route::post('/dashboard/KESAMBEN/PLN/store','DataController@storekbnpln');
Route::post('/dashboard/KESAMBEN/PLN/update','DataController@updatekbnpln');

Route::get('/dashboard/KESAMBEN/AC',['as' => 'kbn_ac', 'uses' =>'DataController@indexkbnac']);
Route::get('/dashboard/KESAMBEN/AC/tambah','DataController@tambahkbnac');
Route::post('/dashboard/KESAMBEN/AC/store','DataController@storekbnac');
Route::post('/dashboard/KESAMBEN/AC/update','DataController@updatekbnac');

Route::get('/dashboard/KESAMBEN/GENERATOR',['as' => 'kbn_generator', 'uses' =>'DataController@indexkbngenerator']);
Route::get('/dashboard/KESAMBEN/GENERATOR/tambah','DataController@tambahkbngenerator');
Route::post('/dashboard/KESAMBEN/GENERATOR/store','DataController@storekbngenerator');
Route::post('/dashboard/KESAMBEN/GENERATOR/update','DataController@updatekbngenerator');

Route::get('/dashboard/KESAMBEN/RECTIFIER',['as' => 'kbn_rectifier', 'uses' =>'DataController@indexkbnrectifier']);
Route::get('/dashboard/KESAMBEN/RECTIFIER/tambah','DataController@tambahkbnrectifier');
Route::post('/dashboard/KESAMBEN/RECTIFIER/store','DataController@storekbnrectifier');
Route::post('/dashboard/KESAMBEN/RECTIFIER/update','DataController@updatekbnrectifier');

Route::get('/dashboard/KESAMBEN/BATTERE',['as' => 'kbn_battere', 'uses' =>'DataController@indexkbnbattere']);
Route::get('/dashboard/KESAMBEN/BATTERE/tambah','DataController@tambahkbnbattere');
Route::post('/dashboard/KESAMBEN/BATTERE/store','DataController@storekbnbattere');
Route::post('/dashboard/KESAMBEN/BATTERE/update','DataController@updatekbnbattere');

// ==========KEDIRI==========
Route::get('/dashboard/KEDIRI/PLN',['as' => 'kdiwso_pln', 'uses' =>'DataController@indexkdipln']);
Route::get('/dashboard/KEDIRI/PLN/tambah','DataController@tambahkdipln');
Route::post('/dashboard/KEDIRI/PLN/store','DataController@storekdipln');
Route::post('/dashboard/KEDIRI/PLN/update','DataController@updatekdipln');

Route::get('/dashboard/KEDIRI/AC',['as' => 'kdi_ac', 'uses' =>'DataController@indexkdiac']);
Route::get('/dashboard/KEDIRI/AC/tambah','DataController@tambahkdiac');
Route::post('/dashboard/KEDIRI/AC/store','DataController@storekdiac');
Route::post('/dashboard/KEDIRI/AC/update','DataController@updatekdiac');

Route::get('/dashboard/KEDIRI/GENERATOR',['as' => 'kdi_generator', 'uses' =>'DataController@indexkdigenerator']);
Route::get('/dashboard/KEDIRI/GENERATOR/tambah','DataController@tambahkdigenerator');
Route::post('/dashboard/KEDIRI/GENERATOR/store','DataController@storekdigenerator');
Route::post('/dashboard/KEDIRI/GENERATOR/update','DataController@updatekdigenerator');

Route::get('/dashboard/KEDIRI/RECTIFIER',['as' => 'kdi_rectifier', 'uses' =>'DataController@indexkdirectifier']);
Route::get('/dashboard/KEDIRI/RECTIFIER/tambah','DataController@tambahkdirectifier');
Route::post('/dashboard/KEDIRI/RECTIFIER/store','DataController@storekdirectifier');
Route::post('/dashboard/KEDIRI/RECTIFIER/update','DataController@updatekdirectifier');

Route::get('/dashboard/KEDIRI/BATTERE',['as' => 'kdi_battere', 'uses' =>'DataController@indexkdibattere']);
Route::get('/dashboard/KEDIRI/BATTERE/tambah','DataController@tambahkdibattere');
Route::post('/dashboard/KEDIRI/BATTERE/store','DataController@storekdibattere');
Route::post('/dashboard/KEDIRI/BATTERE/update','DataController@updatekdibattere');

// ==========KEDIRI==========
Route::get('/dashboard/KEDIRI/PLN',['as' => 'kts_pln', 'uses' =>'DataController@indexktspln']);
Route::get('/dashboard/KEDIRI/PLN/tambah','DataController@tambahktspln');
Route::post('/dashboard/KEDIRI/PLN/store','DataController@storektspln');
Route::post('/dashboard/KEDIRI/PLN/update','DataController@updatektspln');

Route::get('/dashboard/KEDIRI/AC',['as' => 'kts_ac', 'uses' =>'DataController@indexktsac']);
Route::get('/dashboard/KEDIRI/AC/tambah','DataController@tambahktsac');
Route::post('/dashboard/KEDIRI/AC/store','DataController@storektsac');
Route::post('/dashboard/KEDIRI/AC/update','DataController@updatektsac');

Route::get('/dashboard/KEDIRI/GENERATOR',['as' => 'kts_generator', 'uses' =>'DataController@indexktsgenerator']);
Route::get('/dashboard/KEDIRI/GENERATOR/tambah','DataController@tambahktsgenerator');
Route::post('/dashboard/KEDIRI/GENERATOR/store','DataController@storektsgenerator');
Route::post('/dashboard/KEDIRI/GENERATOR/update','DataController@updatektsgenerator');

Route::get('/dashboard/KEDIRI/RECTIFIER',['as' => 'kts_rectifier', 'uses' =>'DataController@indexktsrectifier']);
Route::get('/dashboard/KEDIRI/RECTIFIER/tambah','DataController@tambahktsrectifier');
Route::post('/dashboard/KEDIRI/RECTIFIER/store','DataController@storektsrectifier');
Route::post('/dashboard/KEDIRI/RECTIFIER/update','DataController@updatektsrectifier');

Route::get('/dashboard/KEDIRI/BATTERE',['as' => 'kts_battere', 'uses' =>'DataController@indexktsbattere']);
Route::get('/dashboard/KEDIRI/BATTERE/tambah','DataController@tambahktsbattere');
Route::post('/dashboard/KEDIRI/BATTERE/store','DataController@storektsbattere');
Route::post('/dashboard/KEDIRI/BATTERE/update','DataController@updatektsbattere');

// ==========LODOYO==========
Route::get('/dashboard/LODOYO/PLN',['as' => 'ldy_pln', 'uses' =>'DataController@indexldypln']);
Route::get('/dashboard/LODOYO/PLN/tambah','DataController@tambahldypln');
Route::post('/dashboard/LODOYO/PLN/store','DataController@storeldypln');
Route::post('/dashboard/LODOYO/PLN/update','DataController@updateldypln');

Route::get('/dashboard/LODOYO/AC',['as' => 'ldy_ac', 'uses' =>'DataController@indexldyac']);
Route::get('/dashboard/LODOYO/AC/tambah','DataController@tambahldyac');
Route::post('/dashboard/LODOYO/AC/store','DataController@storeldyac');
Route::post('/dashboard/LODOYO/AC/update','DataController@updateldyac');

Route::get('/dashboard/LODOYO/GENERATOR',['as' => 'ldy_generator', 'uses' =>'DataController@indexldygenerator']);
Route::get('/dashboard/LODOYO/GENERATOR/tambah','DataController@tambahldygenerator');
Route::post('/dashboard/LODOYO/GENERATOR/store','DataController@storeldygenerator');
Route::post('/dashboard/LODOYO/GENERATOR/update','DataController@updateldygenerator');

Route::get('/dashboard/LODOYO/RECTIFIER',['as' => 'ldy_rectifier', 'uses' =>'DataController@indexldyrectifier']);
Route::get('/dashboard/LODOYO/RECTIFIER/tambah','DataController@tambahldyrectifier');
Route::post('/dashboard/LODOYO/RECTIFIER/store','DataController@storeldyrectifier');
Route::post('/dashboard/LODOYO/RECTIFIER/update','DataController@updateldyrectifier');

Route::get('/dashboard/LODOYO/BATTERE',['as' => 'ldy_battere', 'uses' =>'DataController@indexldybattere']);
Route::get('/dashboard/LODOYO/BATTERE/tambah','DataController@tambahldybattere');
Route::post('/dashboard/LODOYO/BATTERE/store','DataController@storeldybattere');
Route::post('/dashboard/LODOYO/BATTERE/update','DataController@updateldybattere');

// ==========MOJOROTO==========
Route::get('/dashboard/MOJOROTO/PLN',['as' => 'mjt_pln', 'uses' =>'DataController@indexmjtpln']);
Route::get('/dashboard/MOJOROTO/PLN/tambah','DataController@tambahmjtpln');
Route::post('/dashboard/MOJOROTO/PLN/store','DataController@storemjtpln');
Route::post('/dashboard/MOJOROTO/PLN/update','DataController@updatemjtpln');

Route::get('/dashboard/MOJOROTO/AC',['as' => 'mjt_ac', 'uses' =>'DataController@indexmjtac']);
Route::get('/dashboard/MOJOROTO/AC/tambah','DataController@tambahmjtac');
Route::post('/dashboard/MOJOROTO/AC/store','DataController@storemjtac');
Route::post('/dashboard/MOJOROTO/AC/update','DataController@updatemjtac');

Route::get('/dashboard/MOJOROTO/GENERATOR',['as' => 'mjt_generator', 'uses' =>'DataController@indexmjtgenerator']);
Route::get('/dashboard/MOJOROTO/GENERATOR/tambah','DataController@tambahmjtgenerator');
Route::post('/dashboard/MOJOROTO/GENERATOR/store','DataController@storemjtgenerator');
Route::post('/dashboard/MOJOROTO/GENERATOR/update','DataController@updatemjtgenerator');

Route::get('/dashboard/MOJOROTO/RECTIFIER',['as' => 'mjt_rectifier', 'uses' =>'DataController@indexmjtrectifier']);
Route::get('/dashboard/MOJOROTO/RECTIFIER/tambah','DataController@tambahmjtrectifier');
Route::post('/dashboard/MOJOROTO/RECTIFIER/store','DataController@storemjtrectifier');
Route::post('/dashboard/MOJOROTO/RECTIFIER/update','DataController@updatemjtrectifier');

Route::get('/dashboard/MOJOROTO/BATTERE',['as' => 'mjt_battere', 'uses' =>'DataController@indexmjtbattere']);
Route::get('/dashboard/MOJOROTO/BATTERE/tambah','DataController@tambahmjtbattere');
Route::post('/dashboard/MOJOROTO/BATTERE/store','DataController@storemjtbattere');
Route::post('/dashboard/MOJOROTO/BATTERE/update','DataController@updatemjtbattere');

// ==========MOJOROTO==========
Route::get('/dashboard/MOJOROTO/PLN',['as' => 'ndl_pln', 'uses' =>'DataController@indexndlpln']);
Route::get('/dashboard/MOJOROTO/PLN/tambah','DataController@tambahndlpln');
Route::post('/dashboard/MOJOROTO/PLN/store','DataController@storendlpln');
Route::post('/dashboard/MOJOROTO/PLN/update','DataController@updatendlpln');

Route::get('/dashboard/MOJOROTO/AC',['as' => 'ndl_ac', 'uses' =>'DataController@indexndlac']);
Route::get('/dashboard/MOJOROTO/AC/tambah','DataController@tambahndlac');
Route::post('/dashboard/MOJOROTO/AC/store','DataController@storendlac');
Route::post('/dashboard/MOJOROTO/AC/update','DataController@updatendlac');

Route::get('/dashboard/MOJOROTO/GENERATOR',['as' => 'ndl_generator', 'uses' =>'DataController@indexndlgenerator']);
Route::get('/dashboard/MOJOROTO/GENERATOR/tambah','DataController@tambahndlgenerator');
Route::post('/dashboard/MOJOROTO/GENERATOR/store','DataController@storendlgenerator');
Route::post('/dashboard/MOJOROTO/GENERATOR/update','DataController@updatendlgenerator');

Route::get('/dashboard/MOJOROTO/RECTIFIER',['as' => 'ndl_rectifier', 'uses' =>'DataController@indexndlrectifier']);
Route::get('/dashboard/MOJOROTO/RECTIFIER/tambah','DataController@tambahndlrectifier');
Route::post('/dashboard/MOJOROTO/RECTIFIER/store','DataController@storendlrectifier');
Route::post('/dashboard/MOJOROTO/RECTIFIER/update','DataController@updatendlrectifier');

Route::get('/dashboard/MOJOROTO/BATTERE',['as' => 'ndl_battere', 'uses' =>'DataController@indexndlbattere']);
Route::get('/dashboard/MOJOROTO/BATTERE/tambah','DataController@tambahndlbattere');
Route::post('/dashboard/MOJOROTO/BATTERE/store','DataController@storendlbattere');
Route::post('/dashboard/MOJOROTO/BATTERE/update','DataController@updatendlbattere');

// ==========NGUNUT==========
Route::get('/dashboard/NGUNUT/PLN',['as' => 'ngu_pln', 'uses' =>'DataController@indexngupln']);
Route::get('/dashboard/NGUNUT/PLN/tambah','DataController@tambahngupln');
Route::post('/dashboard/NGUNUT/PLN/store','DataController@storengupln');
Route::post('/dashboard/NGUNUT/PLN/update','DataController@updatengupln');

Route::get('/dashboard/NGUNUT/AC',['as' => 'ngu_ac', 'uses' =>'DataController@indexnguac']);
Route::get('/dashboard/NGUNUT/AC/tambah','DataController@tambahnguac');
Route::post('/dashboard/NGUNUT/AC/store','DataController@storenguac');
Route::post('/dashboard/NGUNUT/AC/update','DataController@updatenguac');

Route::get('/dashboard/NGUNUT/GENERATOR',['as' => 'ngu_generator', 'uses' =>'DataController@indexngugenerator']);
Route::get('/dashboard/NGUNUT/GENERATOR/tambah','DataController@tambahngugenerator');
Route::post('/dashboard/NGUNUT/GENERATOR/store','DataController@storengugenerator');
Route::post('/dashboard/NGUNUT/GENERATOR/update','DataController@updatengugenerator');

Route::get('/dashboard/NGUNUT/RECTIFIER',['as' => 'ngu_rectifier', 'uses' =>'DataController@indexngurectifier']);
Route::get('/dashboard/NGUNUT/RECTIFIER/tambah','DataController@tambahngurectifier');
Route::post('/dashboard/NGUNUT/RECTIFIER/store','DataController@storengurectifier');
Route::post('/dashboard/NGUNUT/RECTIFIER/update','DataController@updatengurectifier');

Route::get('/dashboard/NGUNUT/BATTERE',['as' => 'ngu_battere', 'uses' =>'DataController@indexngubattere']);
Route::get('/dashboard/NGUNUT/BATTERE/tambah','DataController@tambahngubattere');
Route::post('/dashboard/NGUNUT/BATTERE/store','DataController@storengubattere');
Route::post('/dashboard/NGUNUT/BATTERE/update','DataController@updatengubattere');

// ==========NGANJUK==========
Route::get('/dashboard/NGANJUK/PLN',['as' => 'njk_pln', 'uses' =>'DataController@indexnjkpln']);
Route::get('/dashboard/NGANJUK/PLN/tambah','DataController@tambahnjkpln');
Route::post('/dashboard/NGANJUK/PLN/store','DataController@storenjkpln');
Route::post('/dashboard/NGANJUK/PLN/update','DataController@updatenjkpln');

Route::get('/dashboard/NGANJUK/AC',['as' => 'njk_ac', 'uses' =>'DataController@indexnjkac']);
Route::get('/dashboard/NGANJUK/AC/tambah','DataController@tambahnjkac');
Route::post('/dashboard/NGANJUK/AC/store','DataController@storenjkac');
Route::post('/dashboard/NGANJUK/AC/update','DataController@updatenjkac');

Route::get('/dashboard/NGANJUK/GENERATOR',['as' => 'njk_generator', 'uses' =>'DataController@indexnjkgenerator']);
Route::get('/dashboard/NGANJUK/GENERATOR/tambah','DataController@tambahnjkgenerator');
Route::post('/dashboard/NGANJUK/GENERATOR/store','DataController@storenjkgenerator');
Route::post('/dashboard/NGANJUK/GENERATOR/update','DataController@updatenjkgenerator');

Route::get('/dashboard/NGANJUK/RECTIFIER',['as' => 'njk_rectifier', 'uses' =>'DataController@indexnjkrectifier']);
Route::get('/dashboard/NGANJUK/RECTIFIER/tambah','DataController@tambahnjkrectifier');
Route::post('/dashboard/NGANJUK/RECTIFIER/store','DataController@storenjkrectifier');
Route::post('/dashboard/NGANJUK/RECTIFIER/update','DataController@updatenjkrectifier');

Route::get('/dashboard/NGANJUK/BATTERE',['as' => 'njk_battere', 'uses' =>'DataController@indexnjkbattere']);
Route::get('/dashboard/NGANJUK/BATTERE/tambah','DataController@tambahnjkbattere');
Route::post('/dashboard/NGANJUK/BATTERE/store','DataController@storenjkbattere');
Route::post('/dashboard/NGANJUK/BATTERE/update','DataController@updatenjkbattere');

// ==========PARE==========
Route::get('/dashboard/PARE/PLN',['as' => 'pae_pln', 'uses' =>'DataController@indexpaepln']);
Route::get('/dashboard/PARE/PLN/tambah','DataController@tambahpaepln');
Route::post('/dashboard/PARE/PLN/store','DataController@storepaepln');
Route::post('/dashboard/PARE/PLN/update','DataController@updatepaepln');

Route::get('/dashboard/PARE/AC',['as' => 'pae_ac', 'uses' =>'DataController@indexpaeac']);
Route::get('/dashboard/PARE/AC/tambah','DataController@tambahpaeac');
Route::post('/dashboard/PARE/AC/store','DataController@storepaeac');
Route::post('/dashboard/PARE/AC/update','DataController@updatepaeac');

Route::get('/dashboard/PARE/GENERATOR',['as' => 'pae_generator', 'uses' =>'DataController@indexpaegenerator']);
Route::get('/dashboard/PARE/GENERATOR/tambah','DataController@tambahpaegenerator');
Route::post('/dashboard/PARE/GENERATOR/store','DataController@storepaegenerator');
Route::post('/dashboard/PARE/GENERATOR/update','DataController@updatepaegenerator');

Route::get('/dashboard/PARE/RECTIFIER',['as' => 'pae_rectifier', 'uses' =>'DataController@indexpaerectifier']);
Route::get('/dashboard/PARE/RECTIFIER/tambah','DataController@tambahpaerectifier');
Route::post('/dashboard/PARE/RECTIFIER/store','DataController@storepaerectifier');
Route::post('/dashboard/PARE/RECTIFIER/update','DataController@updatepaerectifier');

Route::get('/dashboard/PARE/BATTERE',['as' => 'pae_battere', 'uses' =>'DataController@indexpaebattere']);
Route::get('/dashboard/PARE/BATTERE/tambah','DataController@tambahpaebattere');
Route::post('/dashboard/PARE/BATTERE/store','DataController@storepaebattere');
Route::post('/dashboard/PARE/BATTERE/update','DataController@updatepaebattere');

// ==========PANATARAN==========
Route::get('/dashboard/PANATARAN/PLN',['as' => 'pan_pln', 'uses' =>'DataController@indexpanpln']);
Route::get('/dashboard/PANATARAN/PLN/tambah','DataController@tambahpanpln');
Route::post('/dashboard/PANATARAN/PLN/store','DataController@storepanpln');
Route::post('/dashboard/PANATARAN/PLN/update','DataController@updatepanpln');

Route::get('/dashboard/PANATARAN/AC',['as' => 'pan_ac', 'uses' =>'DataController@indexpanac']);
Route::get('/dashboard/PANATARAN/AC/tambah','DataController@tambahpanac');
Route::post('/dashboard/PANATARAN/AC/store','DataController@storepanac');
Route::post('/dashboard/PANATARAN/AC/update','DataController@updatepanac');

Route::get('/dashboard/PANATARAN/GENERATOR',['as' => 'pan_generator', 'uses' =>'DataController@indexpangenerator']);
Route::get('/dashboard/PANATARAN/GENERATOR/tambah','DataController@tambahpangenerator');
Route::post('/dashboard/PANATARAN/GENERATOR/store','DataController@storepangenerator');
Route::post('/dashboard/PANATARAN/GENERATOR/update','DataController@updatepangenerator');

Route::get('/dashboard/PANATARAN/RECTIFIER',['as' => 'pan_rectifier', 'uses' =>'DataController@indexpanrectifier']);
Route::get('/dashboard/PANATARAN/RECTIFIER/tambah','DataController@tambahpanrectifier');
Route::post('/dashboard/PANATARAN/RECTIFIER/store','DataController@storepanrectifier');
Route::post('/dashboard/PANATARAN/RECTIFIER/update','DataController@updatepanrectifier');

Route::get('/dashboard/PANATARAN/BATTERE',['as' => 'pan_battere', 'uses' =>'DataController@indexpanbattere']);
Route::get('/dashboard/PANATARAN/BATTERE/tambah','DataController@tambahpanbattere');
Route::post('/dashboard/PANATARAN/BATTERE/store','DataController@storepanbattere');
Route::post('/dashboard/PANATARAN/BATTERE/update','DataController@updatepanbattere');

// ==========PAPAR==========
Route::get('/dashboard/PAPAR/PLN',['as' => 'ppr_pln', 'uses' =>'DataController@indexpprpln']);
Route::get('/dashboard/PAPAR/PLN/tambah','DataController@tambahpprpln');
Route::post('/dashboard/PAPAR/PLN/store','DataController@storepprpln');
Route::post('/dashboard/PAPAR/PLN/update','DataController@updatepprpln');

Route::get('/dashboard/PAPAR/AC',['as' => 'ppr_ac', 'uses' =>'DataController@indexpprac']);
Route::get('/dashboard/PAPAR/AC/tambah','DataController@tambahpprac');
Route::post('/dashboard/PAPAR/AC/store','DataController@storepprac');
Route::post('/dashboard/PAPAR/AC/update','DataController@updatepprac');

Route::get('/dashboard/PAPAR/GENERATOR',['as' => 'ppr_generator', 'uses' =>'DataController@indexpprgenerator']);
Route::get('/dashboard/PAPAR/GENERATOR/tambah','DataController@tambahpprgenerator');
Route::post('/dashboard/PAPAR/GENERATOR/store','DataController@storepprgenerator');
Route::post('/dashboard/PAPAR/GENERATOR/update','DataController@updatepprgenerator');

Route::get('/dashboard/PAPAR/RECTIFIER',['as' => 'ppr_rectifier', 'uses' =>'DataController@indexpprrectifier']);
Route::get('/dashboard/PAPAR/RECTIFIER/tambah','DataController@tambahpprrectifier');
Route::post('/dashboard/PAPAR/RECTIFIER/store','DataController@storepprrectifier');
Route::post('/dashboard/PAPAR/RECTIFIER/update','DataController@updatepprrectifier');

Route::get('/dashboard/PAPAR/BATTERE',['as' => 'ppr_battere', 'uses' =>'DataController@indexpprbattere']);
Route::get('/dashboard/PAPAR/BATTERE/tambah','DataController@tambahpprbattere');
Route::post('/dashboard/PAPAR/BATTERE/store','DataController@storepprbattere');
Route::post('/dashboard/PAPAR/BATTERE/update','DataController@updatepprbattere');

// ==========PRAMBON==========
Route::get('/dashboard/PRAMBON/PLN',['as' => 'prb_pln', 'uses' =>'DataController@indexprbpln']);
Route::get('/dashboard/PRAMBON/PLN/tambah','DataController@tambahprbpln');
Route::post('/dashboard/PRAMBON/PLN/store','DataController@storeprbpln');
Route::post('/dashboard/PRAMBON/PLN/update','DataController@updateprbpln');

Route::get('/dashboard/PRAMBON/AC',['as' => 'prb_ac', 'uses' =>'DataController@indexprbac']);
Route::get('/dashboard/PRAMBON/AC/tambah','DataController@tambahprbac');
Route::post('/dashboard/PRAMBON/AC/store','DataController@storeprbac');
Route::post('/dashboard/PRAMBON/AC/update','DataController@updateprbac');

Route::get('/dashboard/PRAMBON/GENERATOR',['as' => 'prb_generator', 'uses' =>'DataController@indexprbgenerator']);
Route::get('/dashboard/PRAMBON/GENERATOR/tambah','DataController@tambahprbgenerator');
Route::post('/dashboard/PRAMBON/GENERATOR/store','DataController@storeprbgenerator');
Route::post('/dashboard/PRAMBON/GENERATOR/update','DataController@updateprbgenerator');

Route::get('/dashboard/PRAMBON/RECTIFIER',['as' => 'prb_rectifier', 'uses' =>'DataController@indexprbrectifier']);
Route::get('/dashboard/PRAMBON/RECTIFIER/tambah','DataController@tambahprbrectifier');
Route::post('/dashboard/PRAMBON/RECTIFIER/store','DataController@storeprbrectifier');
Route::post('/dashboard/PRAMBON/RECTIFIER/update','DataController@updateprbrectifier');

Route::get('/dashboard/PRAMBON/BATTERE',['as' => 'prb_battere', 'uses' =>'DataController@indexprbbattere']);
Route::get('/dashboard/PRAMBON/BATTERE/tambah','DataController@tambahprbbattere');
Route::post('/dashboard/PRAMBON/BATTERE/store','DataController@storeprbbattere');
Route::post('/dashboard/PRAMBON/BATTERE/update','DataController@updateprbbattere');

// ==========PRIGI==========
Route::get('/dashboard/PRIGI/PLN',['as' => 'pri_pln', 'uses' =>'DataController@indexpripln']);
Route::get('/dashboard/PRIGI/PLN/tambah','DataController@tambahpripln');
Route::post('/dashboard/PRIGI/PLN/store','DataController@storepripln');
Route::post('/dashboard/PRIGI/PLN/update','DataController@updatepripln');

Route::get('/dashboard/PRIGI/AC',['as' => 'pri_ac', 'uses' =>'DataController@indexpriac']);
Route::get('/dashboard/PRIGI/AC/tambah','DataController@tambahpriac');
Route::post('/dashboard/PRIGI/AC/store','DataController@storepriac');
Route::post('/dashboard/PRIGI/AC/update','DataController@updatepriac');

Route::get('/dashboard/PRIGI/GENERATOR',['as' => 'pri_generator', 'uses' =>'DataController@indexprigenerator']);
Route::get('/dashboard/PRIGI/GENERATOR/tambah','DataController@tambahprigenerator');
Route::post('/dashboard/PRIGI/GENERATOR/store','DataController@storeprigenerator');
Route::post('/dashboard/PRIGI/GENERATOR/update','DataController@updateprigenerator');

Route::get('/dashboard/PRIGI/RECTIFIER',['as' => 'pri_rectifier', 'uses' =>'DataController@indexprirectifier']);
Route::get('/dashboard/PRIGI/RECTIFIER/tambah','DataController@tambahprirectifier');
Route::post('/dashboard/PRIGI/RECTIFIER/store','DataController@storeprirectifier');
Route::post('/dashboard/PRIGI/RECTIFIER/update','DataController@updateprirectifier');

Route::get('/dashboard/PRIGI/BATTERE',['as' => 'pri_battere', 'uses' =>'DataController@indexpribattere']);
Route::get('/dashboard/PRIGI/BATTERE/tambah','DataController@tambahpribattere');
Route::post('/dashboard/PRIGI/BATTERE/store','DataController@storepribattere');
Route::post('/dashboard/PRIGI/BATTERE/update','DataController@updatepribattere');

// ==========SAMBI==========
Route::get('/dashboard/SAMBI/PLN',['as' => 'sbi_pln', 'uses' =>'DataController@indexsbipln']);
Route::get('/dashboard/SAMBI/PLN/tambah','DataController@tambahsbipln');
Route::post('/dashboard/SAMBI/PLN/store','DataController@storesbipln');
Route::post('/dashboard/SAMBI/PLN/update','DataController@updatesbipln');

Route::get('/dashboard/SAMBI/AC',['as' => 'sbi_ac', 'uses' =>'DataController@indexsbiac']);
Route::get('/dashboard/SAMBI/AC/tambah','DataController@tambahsbiac');
Route::post('/dashboard/SAMBI/AC/store','DataController@storesbiac');
Route::post('/dashboard/SAMBI/AC/update','DataController@updatesbiac');

Route::get('/dashboard/SAMBI/GENERATOR',['as' => 'sbi_generator', 'uses' =>'DataController@indexsbigenerator']);
Route::get('/dashboard/SAMBI/GENERATOR/tambah','DataController@tambahsbigenerator');
Route::post('/dashboard/SAMBI/GENERATOR/store','DataController@storesbigenerator');
Route::post('/dashboard/SAMBI/GENERATOR/update','DataController@updatesbigenerator');

Route::get('/dashboard/SAMBI/RECTIFIER',['as' => 'sbi_rectifier', 'uses' =>'DataController@indexsbirectifier']);
Route::get('/dashboard/SAMBI/RECTIFIER/tambah','DataController@tambahsbirectifier');
Route::post('/dashboard/SAMBI/RECTIFIER/store','DataController@storesbirectifier');
Route::post('/dashboard/SAMBI/RECTIFIER/update','DataController@updatesbirectifier');

Route::get('/dashboard/SAMBI/BATTERE',['as' => 'sbi_battere', 'uses' =>'DataController@indexsbibattere']);
Route::get('/dashboard/SAMBI/BATTERE/tambah','DataController@tambahsbibattere');
Route::post('/dashboard/SAMBI/BATTERE/store','DataController@storesbibattere');
Route::post('/dashboard/SAMBI/BATTERE/update','DataController@updatesbibattere');

// ==========SRENGAT==========
Route::get('/dashboard/SRENGAT/PLN',['as' => 'snt_pln', 'uses' =>'DataController@indexsntpln']);
Route::get('/dashboard/SRENGAT/PLN/tambah','DataController@tambahsntpln');
Route::post('/dashboard/SRENGAT/PLN/store','DataController@storesntpln');
Route::post('/dashboard/SRENGAT/PLN/update','DataController@updatesntpln');

Route::get('/dashboard/SRENGAT/AC',['as' => 'snt_ac', 'uses' =>'DataController@indexsntac']);
Route::get('/dashboard/SRENGAT/AC/tambah','DataController@tambahsntac');
Route::post('/dashboard/SRENGAT/AC/store','DataController@storesntac');
Route::post('/dashboard/SRENGAT/AC/update','DataController@updatesntac');

Route::get('/dashboard/SRENGAT/GENERATOR',['as' => 'snt_generator', 'uses' =>'DataController@indexsntgenerator']);
Route::get('/dashboard/SRENGAT/GENERATOR/tambah','DataController@tambahsntgenerator');
Route::post('/dashboard/SRENGAT/GENERATOR/store','DataController@storesntgenerator');
Route::post('/dashboard/SRENGAT/GENERATOR/update','DataController@updatesntgenerator');

Route::get('/dashboard/SRENGAT/RECTIFIER',['as' => 'snt_rectifier', 'uses' =>'DataController@indexsntrectifier']);
Route::get('/dashboard/SRENGAT/RECTIFIER/tambah','DataController@tambahsntrectifier');
Route::post('/dashboard/SRENGAT/RECTIFIER/store','DataController@storesntrectifier');
Route::post('/dashboard/SRENGAT/RECTIFIER/update','DataController@updatesntrectifier');

Route::get('/dashboard/SRENGAT/BATTERE',['as' => 'snt_battere', 'uses' =>'DataController@indexsntbattere']);
Route::get('/dashboard/SRENGAT/BATTERE/tambah','DataController@tambahsntbattere');
Route::post('/dashboard/SRENGAT/BATTERE/store','DataController@storesntbattere');
Route::post('/dashboard/SRENGAT/BATTERE/update','DataController@updatesntbattere');

// ==========TRENGGALEK==========
Route::get('/dashboard/TRENGGALEK/PLN',['as' => 'tre_pln', 'uses' =>'DataController@indextrepln']);
Route::get('/dashboard/TRENGGALEK/PLN/tambah','DataController@tambahtrepln');
Route::post('/dashboard/TRENGGALEK/PLN/store','DataController@storetrepln');
Route::post('/dashboard/TRENGGALEK/PLN/update','DataController@updatetrepln');

Route::get('/dashboard/TRENGGALEK/AC',['as' => 'tre_ac', 'uses' =>'DataController@indextreac']);
Route::get('/dashboard/TRENGGALEK/AC/tambah','DataController@tambahtreac');
Route::post('/dashboard/TRENGGALEK/AC/store','DataController@storetreac');
Route::post('/dashboard/TRENGGALEK/AC/update','DataController@updatetreac');

Route::get('/dashboard/TRENGGALEK/GENERATOR',['as' => 'tre_generator', 'uses' =>'DataController@indextregenerator']);
Route::get('/dashboard/TRENGGALEK/GENERATOR/tambah','DataController@tambahtregenerator');
Route::post('/dashboard/TRENGGALEK/GENERATOR/store','DataController@storetregenerator');
Route::post('/dashboard/TRENGGALEK/GENERATOR/update','DataController@updatetregenerator');

Route::get('/dashboard/TRENGGALEK/RECTIFIER',['as' => 'tre_rectifier', 'uses' =>'DataController@indextrerectifier']);
Route::get('/dashboard/TRENGGALEK/RECTIFIER/tambah','DataController@tambahtrerectifier');
Route::post('/dashboard/TRENGGALEK/RECTIFIER/store','DataController@storetrerectifier');
Route::post('/dashboard/TRENGGALEK/RECTIFIER/update','DataController@updatetrerectifier');

Route::get('/dashboard/TRENGGALEK/BATTERE',['as' => 'tre_battere', 'uses' =>'DataController@indextrebattere']);
Route::get('/dashboard/TRENGGALEK/BATTERE/tambah','DataController@tambahtrebattere');
Route::post('/dashboard/TRENGGALEK/BATTERE/store','DataController@storetrebattere');
Route::post('/dashboard/TRENGGALEK/BATTERE/update','DataController@updatetrebattere');

// ==========TULUNGAGUNG==========
Route::get('/dashboard/TULUNGAGUNG/PLN',['as' => 'tul_pln', 'uses' =>'DataController@indextulpln']);
Route::get('/dashboard/TULUNGAGUNG/PLN/tambah','DataController@tambahtulpln');
Route::post('/dashboard/TULUNGAGUNG/PLN/store','DataController@storetulpln');
Route::post('/dashboard/TULUNGAGUNG/PLN/update','DataController@updatetulpln');

Route::get('/dashboard/TULUNGAGUNG/AC',['as' => 'tul_ac', 'uses' =>'DataController@indextulac']);
Route::get('/dashboard/TULUNGAGUNG/AC/tambah','DataController@tambahtulac');
Route::post('/dashboard/TULUNGAGUNG/AC/store','DataController@storetulac');
Route::post('/dashboard/TULUNGAGUNG/AC/update','DataController@updatetulac');

Route::get('/dashboard/TULUNGAGUNG/GENERATOR',['as' => 'tul_generator', 'uses' =>'DataController@indextulgenerator']);
Route::get('/dashboard/TULUNGAGUNG/GENERATOR/tambah','DataController@tambahtulgenerator');
Route::post('/dashboard/TULUNGAGUNG/GENERATOR/store','DataController@storetulgenerator');
Route::post('/dashboard/TULUNGAGUNG/GENERATOR/update','DataController@updatetulgenerator');

Route::get('/dashboard/TULUNGAGUNG/RECTIFIER',['as' => 'tul_rectifier', 'uses' =>'DataController@indextulrectifier']);
Route::get('/dashboard/TULUNGAGUNG/RECTIFIER/tambah','DataController@tambahtulrectifier');
Route::post('/dashboard/TULUNGAGUNG/RECTIFIER/store','DataController@storetulrectifier');
Route::post('/dashboard/TULUNGAGUNG/RECTIFIER/update','DataController@updatetulrectifier');

Route::get('/dashboard/TULUNGAGUNG/BATTERE',['as' => 'tul_battere', 'uses' =>'DataController@indextulbattere']);
Route::get('/dashboard/TULUNGAGUNG/BATTERE/tambah','DataController@tambahtulbattere');
Route::post('/dashboard/TULUNGAGUNG/BATTERE/store','DataController@storetulbattere');
Route::post('/dashboard/TULUNGAGUNG/BATTERE/update','DataController@updatetulbattere');

// ==========WATES==========
Route::get('/dashboard/WATES/PLN',['as' => 'wat_pln', 'uses' =>'DataController@indexwatpln']);
Route::get('/dashboard/WATES/PLN/tambah','DataController@tambahwatpln');
Route::post('/dashboard/WATES/PLN/store','DataController@storewatpln');
Route::post('/dashboard/WATES/PLN/update','DataController@updatewatpln');

Route::get('/dashboard/WATES/AC',['as' => 'wat_ac', 'uses' =>'DataController@indexwatac']);
Route::get('/dashboard/WATES/AC/tambah','DataController@tambahwatac');
Route::post('/dashboard/WATES/AC/store','DataController@storewatac');
Route::post('/dashboard/WATES/AC/update','DataController@updatewatac');

Route::get('/dashboard/WATES/GENERATOR',['as' => 'wat_generator', 'uses' =>'DataController@indexwatgenerator']);
Route::get('/dashboard/WATES/GENERATOR/tambah','DataController@tambahwatgenerator');
Route::post('/dashboard/WATES/GENERATOR/store','DataController@storewatgenerator');
Route::post('/dashboard/WATES/GENERATOR/update','DataController@updatewatgenerator');

Route::get('/dashboard/WATES/RECTIFIER',['as' => 'wat_rectifier', 'uses' =>'DataController@indexwatrectifier']);
Route::get('/dashboard/WATES/RECTIFIER/tambah','DataController@tambahwatrectifier');
Route::post('/dashboard/WATES/RECTIFIER/store','DataController@storewatrectifier');
Route::post('/dashboard/WATES/RECTIFIER/update','DataController@updatewatrectifier');

Route::get('/dashboard/WATES/BATTERE',['as' => 'wat_battere', 'uses' =>'DataController@indexwatbattere']);
Route::get('/dashboard/WATES/BATTERE/tambah','DataController@tambahwatbattere');
Route::post('/dashboard/WATES/BATTERE/store','DataController@storewatbattere');
Route::post('/dashboard/WATES/BATTERE/update','DataController@updatewatbattere');

// ==========WLINGI==========
Route::get('/dashboard/WLINGI/PLN',['as' => 'wgi_pln', 'uses' =>'DataController@indexwgipln']);
Route::get('/dashboard/WLINGI/PLN/tambah','DataController@tambahwgipln');
Route::post('/dashboard/WLINGI/PLN/store','DataController@storewgipln');
Route::post('/dashboard/WLINGI/PLN/update','DataController@updatewgipln');

Route::get('/dashboard/WLINGI/AC',['as' => 'wgi_ac', 'uses' =>'DataController@indexwgiac']);
Route::get('/dashboard/WLINGI/AC/tambah','DataController@tambahwgiac');
Route::post('/dashboard/WLINGI/AC/store','DataController@storewgiac');
Route::post('/dashboard/WLINGI/AC/update','DataController@updatewgiac');

Route::get('/dashboard/WLINGI/GENERATOR',['as' => 'wgi_generator', 'uses' =>'DataController@indexwgigenerator']);
Route::get('/dashboard/WLINGI/GENERATOR/tambah','DataController@tambahwgigenerator');
Route::post('/dashboard/WLINGI/GENERATOR/store','DataController@storewgigenerator');
Route::post('/dashboard/WLINGI/GENERATOR/update','DataController@updatewgigenerator');

Route::get('/dashboard/WLINGI/RECTIFIER',['as' => 'wgi_rectifier', 'uses' =>'DataController@indexwgirectifier']);
Route::get('/dashboard/WLINGI/RECTIFIER/tambah','DataController@tambahwgirectifier');
Route::post('/dashboard/WLINGI/RECTIFIER/store','DataController@storewgirectifier');
Route::post('/dashboard/WLINGI/RECTIFIER/update','DataController@updatewgirectifier');

Route::get('/dashboard/WLINGI/BATTERE',['as' => 'wgi_battere', 'uses' =>'DataController@indexwgibattere']);
Route::get('/dashboard/WLINGI/BATTERE/tambah','DataController@tambahwgibattere');
Route::post('/dashboard/WLINGI/BATTERE/store','DataController@storewgibattere');
Route::post('/dashboard/WLINGI/BATTERE/update','DataController@updatewgibattere');

// ==========WARUJAYENG==========
Route::get('/dashboard/WARUJAYENG/PLN',['as' => 'wrj_pln', 'uses' =>'DataController@indexwrjpln']);
Route::get('/dashboard/WARUJAYENG/PLN/tambah','DataController@tambahwrjpln');
Route::post('/dashboard/WARUJAYENG/PLN/store','DataController@storewrjpln');
Route::post('/dashboard/WARUJAYENG/PLN/update','DataController@updatewrjpln');

Route::get('/dashboard/WARUJAYENG/AC',['as' => 'wrj_ac', 'uses' =>'DataController@indexwrjac']);
Route::get('/dashboard/WARUJAYENG/AC/tambah','DataController@tambahwrjac');
Route::post('/dashboard/WARUJAYENG/AC/store','DataController@storewrjac');
Route::post('/dashboard/WARUJAYENG/AC/update','DataController@updatewrjac');

Route::get('/dashboard/WARUJAYENG/GENERATOR',['as' => 'wrj_generator', 'uses' =>'DataController@indexwrjgenerator']);
Route::get('/dashboard/WARUJAYENG/GENERATOR/tambah','DataController@tambahwrjgenerator');
Route::post('/dashboard/WARUJAYENG/GENERATOR/store','DataController@storewrjgenerator');
Route::post('/dashboard/WARUJAYENG/GENERATOR/update','DataController@updatewrjgenerator');

Route::get('/dashboard/WARUJAYENG/RECTIFIER',['as' => 'wrj_rectifier', 'uses' =>'DataController@indexwrjrectifier']);
Route::get('/dashboard/WARUJAYENG/RECTIFIER/tambah','DataController@tambahwrjrectifier');
Route::post('/dashboard/WARUJAYENG/RECTIFIER/store','DataController@storewrjrectifier');
Route::post('/dashboard/WARUJAYENG/RECTIFIER/update','DataController@updatewrjrectifier');

Route::get('/dashboard/WARUJAYENG/BATTERE',['as' => 'wrj_battere', 'uses' =>'DataController@indexwrjbattere']);
Route::get('/dashboard/WARUJAYENG/BATTERE/tambah','DataController@tambahwrjbattere');
Route::post('/dashboard/WARUJAYENG/BATTERE/store','DataController@storewrjbattere');
Route::post('/dashboard/WARUJAYENG/BATTERE/update','DataController@updatewrjbattere');










// ==========ATAMBUA==========
Route::get('/dashboard/ATAMBUA/PLN',['as' => 'atb_pln', 'uses' =>'DataController@indexatbpln']);
Route::get('/dashboard/ATAMBUA/PLN/tambah','DataController@tambahatbpln');
Route::post('/dashboard/ATAMBUA/PLN/store','DataController@storeatbpln');
Route::post('/dashboard/ATAMBUA/PLN/update','DataController@updateatbpln');

Route::get('/dashboard/ATAMBUA/AC',['as' => 'atb_ac', 'uses' =>'DataController@indexatbac']);
Route::get('/dashboard/ATAMBUA/AC/tambah','DataController@tambahatbac');
Route::post('/dashboard/ATAMBUA/AC/store','DataController@storeatbac');
Route::post('/dashboard/ATAMBUA/AC/update','DataController@updateatbac');

Route::get('/dashboard/ATAMBUA/GENERATOR',['as' => 'atb_generator', 'uses' =>'DataController@indexatbgenerator']);
Route::get('/dashboard/ATAMBUA/GENERATOR/tambah','DataController@tambahatbgenerator');
Route::post('/dashboard/ATAMBUA/GENERATOR/store','DataController@storeatbgenerator');
Route::post('/dashboard/ATAMBUA/GENERATOR/update','DataController@updateatbgenerator');

Route::get('/dashboard/ATAMBUA/RECTIFIER',['as' => 'atb_rectifier', 'uses' =>'DataController@indexatbrectifier']);
Route::get('/dashboard/ATAMBUA/RECTIFIER/tambah','DataController@tambahatbrectifier');
Route::post('/dashboard/ATAMBUA/RECTIFIER/store','DataController@storeatbrectifier');
Route::post('/dashboard/ATAMBUA/RECTIFIER/update','DataController@updateatbrectifier');

Route::get('/dashboard/ATAMBUA/BATTERE',['as' => 'atb_battere', 'uses' =>'DataController@indexatbbattere']);
Route::get('/dashboard/ATAMBUA/BATTERE/tambah','DataController@tambahatbbattere');
Route::post('/dashboard/ATAMBUA/BATTERE/store','DataController@storeatbbattere');
Route::post('/dashboard/ATAMBUA/BATTERE/update','DataController@updateatbbattere');

// ==========KEFAMENANU==========
Route::get('/dashboard/KEFAMENANU/PLN',['as' => 'kef_pln', 'uses' =>'DataController@indexkefpln']);
Route::get('/dashboard/KEFAMENANU/PLN/tambah','DataController@tambahkefpln');
Route::post('/dashboard/KEFAMENANU/PLN/store','DataController@storekefpln');
Route::post('/dashboard/KEFAMENANU/PLN/update','DataController@updatekefpln');

Route::get('/dashboard/KEFAMENANU/AC',['as' => 'kef_ac', 'uses' =>'DataController@indexkefac']);
Route::get('/dashboard/KEFAMENANU/AC/tambah','DataController@tambahkefac');
Route::post('/dashboard/KEFAMENANU/AC/store','DataController@storekefac');
Route::post('/dashboard/KEFAMENANU/AC/update','DataController@updatekefac');

Route::get('/dashboard/KEFAMENANU/GENERATOR',['as' => 'kef_generator', 'uses' =>'DataController@indexkefgenerator']);
Route::get('/dashboard/KEFAMENANU/GENERATOR/tambah','DataController@tambahkefgenerator');
Route::post('/dashboard/KEFAMENANU/GENERATOR/store','DataController@storekefgenerator');
Route::post('/dashboard/KEFAMENANU/GENERATOR/update','DataController@updatekefgenerator');

Route::get('/dashboard/KEFAMENANU/RECTIFIER',['as' => 'kef_rectifier', 'uses' =>'DataController@indexkefrectifier']);
Route::get('/dashboard/KEFAMENANU/RECTIFIER/tambah','DataController@tambahkefrectifier');
Route::post('/dashboard/KEFAMENANU/RECTIFIER/store','DataController@storekefrectifier');
Route::post('/dashboard/KEFAMENANU/RECTIFIER/update','DataController@updatekefrectifier');

Route::get('/dashboard/KEFAMENANU/BATTERE',['as' => 'kef_battere', 'uses' =>'DataController@indexkefbattere']);
Route::get('/dashboard/KEFAMENANU/BATTERE/tambah','DataController@tambahkefbattere');
Route::post('/dashboard/KEFAMENANU/BATTERE/store','DataController@storekefbattere');
Route::post('/dashboard/KEFAMENANU/BATTERE/update','DataController@updatekefbattere');

// ==========KUPANG==========
Route::get('/dashboard/KUPANG/PLN',['as' => 'kpn_pln', 'uses' =>'DataController@indexkpnpln']);
Route::get('/dashboard/KUPANG/PLN/tambah','DataController@tambahkpnpln');
Route::post('/dashboard/KUPANG/PLN/store','DataController@storekpnpln');
Route::post('/dashboard/KUPANG/PLN/update','DataController@updatekpnpln');

Route::get('/dashboard/KUPANG/AC',['as' => 'kpn_ac', 'uses' =>'DataController@indexkpnac']);
Route::get('/dashboard/KUPANG/AC/tambah','DataController@tambahkpnac');
Route::post('/dashboard/KUPANG/AC/store','DataController@storekpnac');
Route::post('/dashboard/KUPANG/AC/update','DataController@updatekpnac');

Route::get('/dashboard/KUPANG/GENERATOR',['as' => 'kpn_generator', 'uses' =>'DataController@indexkpngenerator']);
Route::get('/dashboard/KUPANG/GENERATOR/tambah','DataController@tambahkpngenerator');
Route::post('/dashboard/KUPANG/GENERATOR/store','DataController@storekpngenerator');
Route::post('/dashboard/KUPANG/GENERATOR/update','DataController@updatekpngenerator');

Route::get('/dashboard/KUPANG/RECTIFIER',['as' => 'kpn_rectifier', 'uses' =>'DataController@indexkpnrectifier']);
Route::get('/dashboard/KUPANG/RECTIFIER/tambah','DataController@tambahkpnrectifier');
Route::post('/dashboard/KUPANG/RECTIFIER/store','DataController@storekpnrectifier');
Route::post('/dashboard/KUPANG/RECTIFIER/update','DataController@updatekpnrectifier');

Route::get('/dashboard/KUPANG/BATTERE',['as' => 'kpn_battere', 'uses' =>'DataController@indexkpnbattere']);
Route::get('/dashboard/KUPANG/BATTERE/tambah','DataController@tambahkpnbattere');
Route::post('/dashboard/KUPANG/BATTERE/store','DataController@storekpnbattere');
Route::post('/dashboard/KUPANG/BATTERE/update','DataController@updatekpnbattere');

// ==========NIKI NIKI==========
Route::get('/dashboard/NIKI NIKI/PLN',['as' => 'nkn_pln', 'uses' =>'DataController@indexnknpln']);
Route::get('/dashboard/NIKI NIKI/PLN/tambah','DataController@tambahnknpln');
Route::post('/dashboard/NIKI NIKI/PLN/store','DataController@storenknpln');
Route::post('/dashboard/NIKI NIKI/PLN/update','DataController@updatenknpln');

Route::get('/dashboard/NIKI NIKI/AC',['as' => 'nkn_ac', 'uses' =>'DataController@indexnknac']);
Route::get('/dashboard/NIKI NIKI/AC/tambah','DataController@tambahnknac');
Route::post('/dashboard/NIKI NIKI/AC/store','DataController@storenknac');
Route::post('/dashboard/NIKI NIKI/AC/update','DataController@updatenknac');

Route::get('/dashboard/NIKI NIKI/GENERATOR',['as' => 'nkn_generator', 'uses' =>'DataController@indexnkngenerator']);
Route::get('/dashboard/NIKI NIKI/GENERATOR/tambah','DataController@tambahnkngenerator');
Route::post('/dashboard/NIKI NIKI/GENERATOR/store','DataController@storenkngenerator');
Route::post('/dashboard/NIKI NIKI/GENERATOR/update','DataController@updatenkngenerator');

Route::get('/dashboard/NIKI NIKI/RECTIFIER',['as' => 'nkn_rectifier', 'uses' =>'DataController@indexnknrectifier']);
Route::get('/dashboard/NIKI NIKI/RECTIFIER/tambah','DataController@tambahnknrectifier');
Route::post('/dashboard/NIKI NIKI/RECTIFIER/store','DataController@storenknrectifier');
Route::post('/dashboard/NIKI NIKI/RECTIFIER/update','DataController@updatenknrectifier');

Route::get('/dashboard/NIKI NIKI/BATTERE',['as' => 'nkn_battere', 'uses' =>'DataController@indexnknbattere']);
Route::get('/dashboard/NIKI NIKI/BATTERE/tambah','DataController@tambahnknbattere');
Route::post('/dashboard/NIKI NIKI/BATTERE/store','DataController@storenknbattere');
Route::post('/dashboard/NIKI NIKI/BATTERE/update','DataController@updatenknbattere');

// ==========OESAPA==========
Route::get('/dashboard/OESAPA/PLN',['as' => 'osp_pln', 'uses' =>'DataController@indexosppln']);
Route::get('/dashboard/OESAPA/PLN/tambah','DataController@tambahosppln');
Route::post('/dashboard/OESAPA/PLN/store','DataController@storeosppln');
Route::post('/dashboard/OESAPA/PLN/update','DataController@updateosppln');

Route::get('/dashboard/OESAPA/AC',['as' => 'osp_ac', 'uses' =>'DataController@indexospac']);
Route::get('/dashboard/OESAPA/AC/tambah','DataController@tambahospac');
Route::post('/dashboard/OESAPA/AC/store','DataController@storeospac');
Route::post('/dashboard/OESAPA/AC/update','DataController@updateospac');

Route::get('/dashboard/OESAPA/GENERATOR',['as' => 'osp_generator', 'uses' =>'DataController@indexospgenerator']);
Route::get('/dashboard/OESAPA/GENERATOR/tambah','DataController@tambahospgenerator');
Route::post('/dashboard/OESAPA/GENERATOR/store','DataController@storeospgenerator');
Route::post('/dashboard/OESAPA/GENERATOR/update','DataController@updateospgenerator');

Route::get('/dashboard/OESAPA/RECTIFIER',['as' => 'osp_rectifier', 'uses' =>'DataController@indexosprectifier']);
Route::get('/dashboard/OESAPA/RECTIFIER/tambah','DataController@tambahosprectifier');
Route::post('/dashboard/OESAPA/RECTIFIER/store','DataController@storeosprectifier');
Route::post('/dashboard/OESAPA/RECTIFIER/update','DataController@updateosprectifier');

Route::get('/dashboard/OESAPA/BATTERE',['as' => 'osp_battere', 'uses' =>'DataController@indexospbattere']);
Route::get('/dashboard/OESAPA/BATTERE/tambah','DataController@tambahospbattere');
Route::post('/dashboard/OESAPA/BATTERE/store','DataController@storeospbattere');
Route::post('/dashboard/OESAPA/BATTERE/update','DataController@updateospbattere');

// ==========SEBA==========
Route::get('/dashboard/SEBA/PLN',['as' => 'seb_pln', 'uses' =>'DataController@indexsebpln']);
Route::get('/dashboard/SEBA/PLN/tambah','DataController@tambahsebpln');
Route::post('/dashboard/SEBA/PLN/store','DataController@storesebpln');
Route::post('/dashboard/SEBA/PLN/update','DataController@updatesebpln');

Route::get('/dashboard/SEBA/AC',['as' => 'seb_ac', 'uses' =>'DataController@indexsebac']);
Route::get('/dashboard/SEBA/AC/tambah','DataController@tambahsebac');
Route::post('/dashboard/SEBA/AC/store','DataController@storesebac');
Route::post('/dashboard/SEBA/AC/update','DataController@updatesebac');

Route::get('/dashboard/SEBA/GENERATOR',['as' => 'seb_generator', 'uses' =>'DataController@indexsebgenerator']);
Route::get('/dashboard/SEBA/GENERATOR/tambah','DataController@tambahsebgenerator');
Route::post('/dashboard/SEBA/GENERATOR/store','DataController@storesebgenerator');
Route::post('/dashboard/SEBA/GENERATOR/update','DataController@updatesebgenerator');

Route::get('/dashboard/SEBA/RECTIFIER',['as' => 'seb_rectifier', 'uses' =>'DataController@indexsebrectifier']);
Route::get('/dashboard/SEBA/RECTIFIER/tambah','DataController@tambahsebrectifier');
Route::post('/dashboard/SEBA/RECTIFIER/store','DataController@storesebrectifier');
Route::post('/dashboard/SEBA/RECTIFIER/update','DataController@updatesebrectifier');

Route::get('/dashboard/SEBA/BATTERE',['as' => 'seb_battere', 'uses' =>'DataController@indexsebbattere']);
Route::get('/dashboard/SEBA/BATTERE/tambah','DataController@tambahsebbattere');
Route::post('/dashboard/SEBA/BATTERE/store','DataController@storesebbattere');
Route::post('/dashboard/SEBA/BATTERE/update','DataController@updatesebbattere');

// ==========SOE==========
Route::get('/dashboard/SOE/PLN',['as' => 'soe_pln', 'uses' =>'DataController@indexsoepln']);
Route::get('/dashboard/SOE/PLN/tambah','DataController@tambahsoepln');
Route::post('/dashboard/SOE/PLN/store','DataController@storesoepln');
Route::post('/dashboard/SOE/PLN/update','DataController@updatesoepln');

Route::get('/dashboard/SOE/AC',['as' => 'soe_ac', 'uses' =>'DataController@indexsoeac']);
Route::get('/dashboard/SOE/AC/tambah','DataController@tambahsoeac');
Route::post('/dashboard/SOE/AC/store','DataController@storesoeac');
Route::post('/dashboard/SOE/AC/update','DataController@updatesoeac');

Route::get('/dashboard/SOE/GENERATOR',['as' => 'soe_generator', 'uses' =>'DataController@indexsoegenerator']);
Route::get('/dashboard/SOE/GENERATOR/tambah','DataController@tambahsoegenerator');
Route::post('/dashboard/SOE/GENERATOR/store','DataController@storesoegenerator');
Route::post('/dashboard/SOE/GENERATOR/update','DataController@updatesoegenerator');

Route::get('/dashboard/SOE/RECTIFIER',['as' => 'soe_rectifier', 'uses' =>'DataController@indexsoerectifier']);
Route::get('/dashboard/SOE/RECTIFIER/tambah','DataController@tambahsoerectifier');
Route::post('/dashboard/SOE/RECTIFIER/store','DataController@storesoerectifier');
Route::post('/dashboard/SOE/RECTIFIER/update','DataController@updatesoerectifier');

Route::get('/dashboard/SOE/BATTERE',['as' => 'soe_battere', 'uses' =>'DataController@indexsoebattere']);
Route::get('/dashboard/SOE/BATTERE/tambah','DataController@tambahsoebattere');
Route::post('/dashboard/SOE/BATTERE/store','DataController@storesoebattere');
Route::post('/dashboard/SOE/BATTERE/update','DataController@updatesoebattere');

// ==========TENAU==========
Route::get('/dashboard/TENAU/PLN',['as' => 'tna_pln', 'uses' =>'DataController@indextnapln']);
Route::get('/dashboard/TENAU/PLN/tambah','DataController@tambahtnapln');
Route::post('/dashboard/TENAU/PLN/store','DataController@storetnapln');
Route::post('/dashboard/TENAU/PLN/update','DataController@updatetnapln');

Route::get('/dashboard/TENAU/AC',['as' => 'tna_ac', 'uses' =>'DataController@indextnaac']);
Route::get('/dashboard/TENAU/AC/tambah','DataController@tambahtnaac');
Route::post('/dashboard/TENAU/AC/store','DataController@storetnaac');
Route::post('/dashboard/TENAU/AC/update','DataController@updatetnaac');

Route::get('/dashboard/TENAU/GENERATOR',['as' => 'tna_generator', 'uses' =>'DataController@indextnagenerator']);
Route::get('/dashboard/TENAU/GENERATOR/tambah','DataController@tambahtnagenerator');
Route::post('/dashboard/TENAU/GENERATOR/store','DataController@storetnagenerator');
Route::post('/dashboard/TENAU/GENERATOR/update','DataController@updatetnagenerator');

Route::get('/dashboard/TENAU/RECTIFIER',['as' => 'tna_rectifier', 'uses' =>'DataController@indextnarectifier']);
Route::get('/dashboard/TENAU/RECTIFIER/tambah','DataController@tambahtnarectifier');
Route::post('/dashboard/TENAU/RECTIFIER/store','DataController@storetnarectifier');
Route::post('/dashboard/TENAU/RECTIFIER/update','DataController@updatetnarectifier');

Route::get('/dashboard/TENAU/BATTERE',['as' => 'tna_battere', 'uses' =>'DataController@indextnabattere']);
Route::get('/dashboard/TENAU/BATTERE/tambah','DataController@tambahtnabattere');
Route::post('/dashboard/TENAU/BATTERE/store','DataController@storetnabattere');
Route::post('/dashboard/TENAU/BATTERE/update','DataController@updatetnabattere');










// ==========BANCAR==========
Route::get('/dashboard/BANCAR/PLN',['as' => 'bcr_pln', 'uses' =>'DataController@indexbcrpln']);
Route::get('/dashboard/BANCAR/PLN/tambah','DataController@tambahbcrpln');
Route::post('/dashboard/BANCAR/PLN/store','DataController@storebcrpln');
Route::post('/dashboard/BANCAR/PLN/update','DataController@updatebcrpln');

Route::get('/dashboard/BANCAR/AC',['as' => 'bcr_ac', 'uses' =>'DataController@indexbcrac']);
Route::get('/dashboard/BANCAR/AC/tambah','DataController@tambahbcrac');
Route::post('/dashboard/BANCAR/AC/store','DataController@storebcrac');
Route::post('/dashboard/BANCAR/AC/update','DataController@updatebcrac');

Route::get('/dashboard/BANCAR/GENERATOR',['as' => 'bcr_generator', 'uses' =>'DataController@indexbcrgenerator']);
Route::get('/dashboard/BANCAR/GENERATOR/tambah','DataController@tambahbcrgenerator');
Route::post('/dashboard/BANCAR/GENERATOR/store','DataController@storebcrgenerator');
Route::post('/dashboard/BANCAR/GENERATOR/update','DataController@updatebcrgenerator');

Route::get('/dashboard/BANCAR/RECTIFIER',['as' => 'bcr_rectifier', 'uses' =>'DataController@indexbcrrectifier']);
Route::get('/dashboard/BANCAR/RECTIFIER/tambah','DataController@tambahbcrrectifier');
Route::post('/dashboard/BANCAR/RECTIFIER/store','DataController@storebcrrectifier');
Route::post('/dashboard/BANCAR/RECTIFIER/update','DataController@updatebcrrectifier');

Route::get('/dashboard/BANCAR/BATTERE',['as' => 'bcr_battere', 'uses' =>'DataController@indexbcrbattere']);
Route::get('/dashboard/BANCAR/BATTERE/tambah','DataController@tambahbcrbattere');
Route::post('/dashboard/BANCAR/BATTERE/store','DataController@storebcrbattere');
Route::post('/dashboard/BANCAR/BATTERE/update','DataController@updatebcrbattere');

// ==========BOJONEGORO==========
Route::get('/dashboard/BOJONEGORO/PLN',['as' => 'bjn_pln', 'uses' =>'DataController@indexbjnpln']);
Route::get('/dashboard/BOJONEGORO/PLN/tambah','DataController@tambahbjnpln');
Route::post('/dashboard/BOJONEGORO/PLN/store','DataController@storebjnpln');
Route::post('/dashboard/BOJONEGORO/PLN/update','DataController@updatebjnpln');

Route::get('/dashboard/BOJONEGORO/AC',['as' => 'bjn_ac', 'uses' =>'DataController@indexbjnac']);
Route::get('/dashboard/BOJONEGORO/AC/tambah','DataController@tambahbjnac');
Route::post('/dashboard/BOJONEGORO/AC/store','DataController@storebjnac');
Route::post('/dashboard/BOJONEGORO/AC/update','DataController@updatebjnac');

Route::get('/dashboard/BOJONEGORO/GENERATOR',['as' => 'bjn_generator', 'uses' =>'DataController@indexbjngenerator']);
Route::get('/dashboard/BOJONEGORO/GENERATOR/tambah','DataController@tambahbjngenerator');
Route::post('/dashboard/BOJONEGORO/GENERATOR/store','DataController@storebjngenerator');
Route::post('/dashboard/BOJONEGORO/GENERATOR/update','DataController@updatebjngenerator');

Route::get('/dashboard/BOJONEGORO/RECTIFIER',['as' => 'bjn_rectifier', 'uses' =>'DataController@indexbjnrectifier']);
Route::get('/dashboard/BOJONEGORO/RECTIFIER/tambah','DataController@tambahbjnrectifier');
Route::post('/dashboard/BOJONEGORO/RECTIFIER/store','DataController@storebjnrectifier');
Route::post('/dashboard/BOJONEGORO/RECTIFIER/update','DataController@updatebjnrectifier');

Route::get('/dashboard/BOJONEGORO/BATTERE',['as' => 'bjn_battere', 'uses' =>'DataController@indexbjnbattere']);
Route::get('/dashboard/BOJONEGORO/BATTERE/tambah','DataController@tambahbjnbattere');
Route::post('/dashboard/BOJONEGORO/BATTERE/store','DataController@storebjnbattere');
Route::post('/dashboard/BOJONEGORO/BATTERE/update','DataController@updatebjnbattere');

// ==========CARUBAN==========
Route::get('/dashboard/CARUBAN/PLN',['as' => 'crb_pln', 'uses' =>'DataController@indexcrbpln']);
Route::get('/dashboard/CARUBAN/PLN/tambah','DataController@tambahcrbpln');
Route::post('/dashboard/CARUBAN/PLN/store','DataController@storecrbpln');
Route::post('/dashboard/CARUBAN/PLN/update','DataController@updatecrbpln');

Route::get('/dashboard/CARUBAN/AC',['as' => 'crb_ac', 'uses' =>'DataController@indexcrbac']);
Route::get('/dashboard/CARUBAN/AC/tambah','DataController@tambahcrbac');
Route::post('/dashboard/CARUBAN/AC/store','DataController@storecrbac');
Route::post('/dashboard/CARUBAN/AC/update','DataController@updatecrbac');

Route::get('/dashboard/CARUBAN/GENERATOR',['as' => 'crb_generator', 'uses' =>'DataController@indexcrbgenerator']);
Route::get('/dashboard/CARUBAN/GENERATOR/tambah','DataController@tambahcrbgenerator');
Route::post('/dashboard/CARUBAN/GENERATOR/store','DataController@storecrbgenerator');
Route::post('/dashboard/CARUBAN/GENERATOR/update','DataController@updatecrbgenerator');

Route::get('/dashboard/CARUBAN/RECTIFIER',['as' => 'crb_rectifier', 'uses' =>'DataController@indexcrbrectifier']);
Route::get('/dashboard/CARUBAN/RECTIFIER/tambah','DataController@tambahcrbrectifier');
Route::post('/dashboard/CARUBAN/RECTIFIER/store','DataController@storecrbrectifier');
Route::post('/dashboard/CARUBAN/RECTIFIER/update','DataController@updatecrbrectifier');

Route::get('/dashboard/CARUBAN/BATTERE',['as' => 'crb_battere', 'uses' =>'DataController@indexcrbbattere']);
Route::get('/dashboard/CARUBAN/BATTERE/tambah','DataController@tambahcrbbattere');
Route::post('/dashboard/CARUBAN/BATTERE/store','DataController@storecrbbattere');
Route::post('/dashboard/CARUBAN/BATTERE/update','DataController@updatecrbbattere');

// ==========GORANGGARENG==========
Route::get('/dashboard/GORANGGARENG/PLN',['as' => 'ggr_pln', 'uses' =>'DataController@indexggrpln']);
Route::get('/dashboard/GORANGGARENG/PLN/tambah','DataController@tambahggrpln');
Route::post('/dashboard/GORANGGARENG/PLN/store','DataController@storeggrpln');
Route::post('/dashboard/GORANGGARENG/PLN/update','DataController@updateggrpln');

Route::get('/dashboard/GORANGGARENG/AC',['as' => 'ggr_ac', 'uses' =>'DataController@indexggrac']);
Route::get('/dashboard/GORANGGARENG/AC/tambah','DataController@tambahggrac');
Route::post('/dashboard/GORANGGARENG/AC/store','DataController@storeggrac');
Route::post('/dashboard/GORANGGARENG/AC/update','DataController@updateggrac');

Route::get('/dashboard/GORANGGARENG/GENERATOR',['as' => 'ggr_generator', 'uses' =>'DataController@indexggrgenerator']);
Route::get('/dashboard/GORANGGARENG/GENERATOR/tambah','DataController@tambahggrgenerator');
Route::post('/dashboard/GORANGGARENG/GENERATOR/store','DataController@storeggrgenerator');
Route::post('/dashboard/GORANGGARENG/GENERATOR/update','DataController@updateggrgenerator');

Route::get('/dashboard/GORANGGARENG/RECTIFIER',['as' => 'ggr_rectifier', 'uses' =>'DataController@indexggrrectifier']);
Route::get('/dashboard/GORANGGARENG/RECTIFIER/tambah','DataController@tambahggrrectifier');
Route::post('/dashboard/GORANGGARENG/RECTIFIER/store','DataController@storeggrrectifier');
Route::post('/dashboard/GORANGGARENG/RECTIFIER/update','DataController@updateggrrectifier');

Route::get('/dashboard/GORANGGARENG/BATTERE',['as' => 'ggr_battere', 'uses' =>'DataController@indexggrbattere']);
Route::get('/dashboard/GORANGGARENG/BATTERE/tambah','DataController@tambahggrbattere');
Route::post('/dashboard/GORANGGARENG/BATTERE/store','DataController@storeggrbattere');
Route::post('/dashboard/GORANGGARENG/BATTERE/update','DataController@updateggrbattere');

// ==========JENANGAN==========
Route::get('/dashboard/JENANGAN/PLN',['as' => 'jen_pln', 'uses' =>'DataController@indexjenpln']);
Route::get('/dashboard/JENANGAN/PLN/tambah','DataController@tambahjenpln');
Route::post('/dashboard/JENANGAN/PLN/store','DataController@storejenpln');
Route::post('/dashboard/JENANGAN/PLN/update','DataController@updatejenpln');

Route::get('/dashboard/JENANGAN/AC',['as' => 'jen_ac', 'uses' =>'DataController@indexjenac']);
Route::get('/dashboard/JENANGAN/AC/tambah','DataController@tambahjenac');
Route::post('/dashboard/JENANGAN/AC/store','DataController@storejenac');
Route::post('/dashboard/JENANGAN/AC/update','DataController@updatejenac');

Route::get('/dashboard/JENANGAN/GENERATOR',['as' => 'jen_generator', 'uses' =>'DataController@indexjengenerator']);
Route::get('/dashboard/JENANGAN/GENERATOR/tambah','DataController@tambahjengenerator');
Route::post('/dashboard/JENANGAN/GENERATOR/store','DataController@storejengenerator');
Route::post('/dashboard/JENANGAN/GENERATOR/update','DataController@updatejengenerator');

Route::get('/dashboard/JENANGAN/RECTIFIER',['as' => 'jen_rectifier', 'uses' =>'DataController@indexjenrectifier']);
Route::get('/dashboard/JENANGAN/RECTIFIER/tambah','DataController@tambahjenrectifier');
Route::post('/dashboard/JENANGAN/RECTIFIER/store','DataController@storejenrectifier');
Route::post('/dashboard/JENANGAN/RECTIFIER/update','DataController@updatejenrectifier');

Route::get('/dashboard/JENANGAN/BATTERE',['as' => 'jen_battere', 'uses' =>'DataController@indexjenbattere']);
Route::get('/dashboard/JENANGAN/BATTERE/tambah','DataController@tambahjenbattere');
Route::post('/dashboard/JENANGAN/BATTERE/store','DataController@storejenbattere');
Route::post('/dashboard/JENANGAN/BATTERE/update','DataController@updatejenbattere');

// ==========JOGOROGO==========
Route::get('/dashboard/JOGOROGO/PLN',['as' => 'jgo_pln', 'uses' =>'DataController@indexjgopln']);
Route::get('/dashboard/JOGOROGO/PLN/tambah','DataController@tambahjgopln');
Route::post('/dashboard/JOGOROGO/PLN/store','DataController@storejgopln');
Route::post('/dashboard/JOGOROGO/PLN/update','DataController@updatejgopln');

Route::get('/dashboard/JOGOROGO/AC',['as' => 'jgo_ac', 'uses' =>'DataController@indexjgoac']);
Route::get('/dashboard/JOGOROGO/AC/tambah','DataController@tambahjgoac');
Route::post('/dashboard/JOGOROGO/AC/store','DataController@storejgoac');
Route::post('/dashboard/JOGOROGO/AC/update','DataController@updatejgoac');

Route::get('/dashboard/JOGOROGO/GENERATOR',['as' => 'jgo_generator', 'uses' =>'DataController@indexjgogenerator']);
Route::get('/dashboard/JOGOROGO/GENERATOR/tambah','DataController@tambahjgogenerator');
Route::post('/dashboard/JOGOROGO/GENERATOR/store','DataController@storejgogenerator');
Route::post('/dashboard/JOGOROGO/GENERATOR/update','DataController@updatejgogenerator');

Route::get('/dashboard/JOGOROGO/RECTIFIER',['as' => 'jgo_rectifier', 'uses' =>'DataController@indexjgorectifier']);
Route::get('/dashboard/JOGOROGO/RECTIFIER/tambah','DataController@tambahjgorectifier');
Route::post('/dashboard/JOGOROGO/RECTIFIER/store','DataController@storejgorectifier');
Route::post('/dashboard/JOGOROGO/RECTIFIER/update','DataController@updatejgorectifier');

Route::get('/dashboard/JOGOROGO/BATTERE',['as' => 'jgo_battere', 'uses' =>'DataController@indexjgobattere']);
Route::get('/dashboard/JOGOROGO/BATTERE/tambah','DataController@tambahjgobattere');
Route::post('/dashboard/JOGOROGO/BATTERE/store','DataController@storejgobattere');
Route::post('/dashboard/JOGOROGO/BATTERE/update','DataController@updatejgobattere');

// ==========JATIROGO==========
Route::get('/dashboard/JATIROGO/PLN',['as' => 'jtr_pln', 'uses' =>'DataController@indexjtrpln']);
Route::get('/dashboard/JATIROGO/PLN/tambah','DataController@tambahjtrpln');
Route::post('/dashboard/JATIROGO/PLN/store','DataController@storejtrpln');
Route::post('/dashboard/JATIROGO/PLN/update','DataController@updatejtrpln');

Route::get('/dashboard/JATIROGO/AC',['as' => 'jtr_ac', 'uses' =>'DataController@indexjtrac']);
Route::get('/dashboard/JATIROGO/AC/tambah','DataController@tambahjtrac');
Route::post('/dashboard/JATIROGO/AC/store','DataController@storejtrac');
Route::post('/dashboard/JATIROGO/AC/update','DataController@updatejtrac');

Route::get('/dashboard/JATIROGO/GENERATOR',['as' => 'jtr_generator', 'uses' =>'DataController@indexjtrgenerator']);
Route::get('/dashboard/JATIROGO/GENERATOR/tambah','DataController@tambahjtrgenerator');
Route::post('/dashboard/JATIROGO/GENERATOR/store','DataController@storejtrgenerator');
Route::post('/dashboard/JATIROGO/GENERATOR/update','DataController@updatejtrgenerator');

Route::get('/dashboard/JATIROGO/RECTIFIER',['as' => 'jtr_rectifier', 'uses' =>'DataController@indexjtrrectifier']);
Route::get('/dashboard/JATIROGO/RECTIFIER/tambah','DataController@tambahjtrrectifier');
Route::post('/dashboard/JATIROGO/RECTIFIER/store','DataController@storejtrrectifier');
Route::post('/dashboard/JATIROGO/RECTIFIER/update','DataController@updatejtrrectifier');

Route::get('/dashboard/JATIROGO/BATTERE',['as' => 'jtr_battere', 'uses' =>'DataController@indexjtrbattere']);
Route::get('/dashboard/JATIROGO/BATTERE/tambah','DataController@tambahjtrbattere');
Route::post('/dashboard/JATIROGO/BATTERE/store','DataController@storejtrbattere');
Route::post('/dashboard/JATIROGO/BATTERE/update','DataController@updatejtrbattere');

// ==========KALITIDU==========
Route::get('/dashboard/KALITIDU/PLN',['as' => 'kdu_pln', 'uses' =>'DataController@indexkdupln']);
Route::get('/dashboard/KALITIDU/PLN/tambah','DataController@tambahkdupln');
Route::post('/dashboard/KALITIDU/PLN/store','DataController@storekdupln');
Route::post('/dashboard/KALITIDU/PLN/update','DataController@updatekdupln');

Route::get('/dashboard/KALITIDU/AC',['as' => 'kdu_ac', 'uses' =>'DataController@indexkduac']);
Route::get('/dashboard/KALITIDU/AC/tambah','DataController@tambahkduac');
Route::post('/dashboard/KALITIDU/AC/store','DataController@storekduac');
Route::post('/dashboard/KALITIDU/AC/update','DataController@updatekduac');

Route::get('/dashboard/KALITIDU/GENERATOR',['as' => 'kdu_generator', 'uses' =>'DataController@indexkdugenerator']);
Route::get('/dashboard/KALITIDU/GENERATOR/tambah','DataController@tambahkdugenerator');
Route::post('/dashboard/KALITIDU/GENERATOR/store','DataController@storekdugenerator');
Route::post('/dashboard/KALITIDU/GENERATOR/update','DataController@updatekdugenerator');

Route::get('/dashboard/KALITIDU/RECTIFIER',['as' => 'kdu_rectifier', 'uses' =>'DataController@indexkdurectifier']);
Route::get('/dashboard/KALITIDU/RECTIFIER/tambah','DataController@tambahkdurectifier');
Route::post('/dashboard/KALITIDU/RECTIFIER/store','DataController@storekdurectifier');
Route::post('/dashboard/KALITIDU/RECTIFIER/update','DataController@updatekdurectifier');

Route::get('/dashboard/KALITIDU/BATTERE',['as' => 'kdu_battere', 'uses' =>'DataController@indexkdubattere']);
Route::get('/dashboard/KALITIDU/BATTERE/tambah','DataController@tambahkdubattere');
Route::post('/dashboard/KALITIDU/BATTERE/store','DataController@storekdubattere');
Route::post('/dashboard/KALITIDU/BATTERE/update','DataController@updatekdubattere');

// ==========KARANGJATI==========
Route::get('/dashboard/KARANGJATI/PLN',['as' => 'krj_pln', 'uses' =>'DataController@indexkrjpln']);
Route::get('/dashboard/KARANGJATI/PLN/tambah','DataController@tambahkrjpln');
Route::post('/dashboard/KARANGJATI/PLN/store','DataController@storekrjpln');
Route::post('/dashboard/KARANGJATI/PLN/update','DataController@updatekrjpln');

Route::get('/dashboard/KARANGJATI/AC',['as' => 'krj_ac', 'uses' =>'DataController@indexkrjac']);
Route::get('/dashboard/KARANGJATI/AC/tambah','DataController@tambahkrjac');
Route::post('/dashboard/KARANGJATI/AC/store','DataController@storekrjac');
Route::post('/dashboard/KARANGJATI/AC/update','DataController@updatekrjac');

Route::get('/dashboard/KARANGJATI/GENERATOR',['as' => 'krj_generator', 'uses' =>'DataController@indexkrjgenerator']);
Route::get('/dashboard/KARANGJATI/GENERATOR/tambah','DataController@tambahkrjgenerator');
Route::post('/dashboard/KARANGJATI/GENERATOR/store','DataController@storekrjgenerator');
Route::post('/dashboard/KARANGJATI/GENERATOR/update','DataController@updatekrjgenerator');

Route::get('/dashboard/KARANGJATI/RECTIFIER',['as' => 'krj_rectifier', 'uses' =>'DataController@indexkrjrectifier']);
Route::get('/dashboard/KARANGJATI/RECTIFIER/tambah','DataController@tambahkrjrectifier');
Route::post('/dashboard/KARANGJATI/RECTIFIER/store','DataController@storekrjrectifier');
Route::post('/dashboard/KARANGJATI/RECTIFIER/update','DataController@updatekrjrectifier');

Route::get('/dashboard/KARANGJATI/BATTERE',['as' => 'krj_battere', 'uses' =>'DataController@indexkrjbattere']);
Route::get('/dashboard/KARANGJATI/BATTERE/tambah','DataController@tambahkrjbattere');
Route::post('/dashboard/KARANGJATI/BATTERE/store','DataController@storekrjbattere');
Route::post('/dashboard/KARANGJATI/BATTERE/update','DataController@updatekrjbattere');

// ==========KERAK==========
Route::get('/dashboard/KERAK/PLN',['as' => 'krk_pln', 'uses' =>'DataController@indexkrkpln']);
Route::get('/dashboard/KERAK/PLN/tambah','DataController@tambahkrkpln');
Route::post('/dashboard/KERAK/PLN/store','DataController@storekrkpln');
Route::post('/dashboard/KERAK/PLN/update','DataController@updatekrkpln');

Route::get('/dashboard/KERAK/AC',['as' => 'krk_ac', 'uses' =>'DataController@indexkrkac']);
Route::get('/dashboard/KERAK/AC/tambah','DataController@tambahkrkac');
Route::post('/dashboard/KERAK/AC/store','DataController@storekrkac');
Route::post('/dashboard/KERAK/AC/update','DataController@updatekrkac');

Route::get('/dashboard/KERAK/GENERATOR',['as' => 'krk_generator', 'uses' =>'DataController@indexkrkgenerator']);
Route::get('/dashboard/KERAK/GENERATOR/tambah','DataController@tambahkrkgenerator');
Route::post('/dashboard/KERAK/GENERATOR/store','DataController@storekrkgenerator');
Route::post('/dashboard/KERAK/GENERATOR/update','DataController@updatekrkgenerator');

Route::get('/dashboard/KERAK/RECTIFIER',['as' => 'krk_rectifier', 'uses' =>'DataController@indexkrkrectifier']);
Route::get('/dashboard/KERAK/RECTIFIER/tambah','DataController@tambahkrkrectifier');
Route::post('/dashboard/KERAK/RECTIFIER/store','DataController@storekrkrectifier');
Route::post('/dashboard/KERAK/RECTIFIER/update','DataController@updatekrkrectifier');

Route::get('/dashboard/KERAK/BATTERE',['as' => 'krk_battere', 'uses' =>'DataController@indexkrkbattere']);
Route::get('/dashboard/KERAK/BATTERE/tambah','DataController@tambahkrkbattere');
Route::post('/dashboard/KERAK/BATTERE/store','DataController@storekrkbattere');
Route::post('/dashboard/KERAK/BATTERE/update','DataController@updatekrkbattere');

// ==========LOGOR==========
Route::get('/dashboard/LOGOR/PLN',['as' => 'log_pln', 'uses' =>'DataController@indexlogpln']);
Route::get('/dashboard/LOGOR/PLN/tambah','DataController@tambahlogpln');
Route::post('/dashboard/LOGOR/PLN/store','DataController@storelogpln');
Route::post('/dashboard/LOGOR/PLN/update','DataController@updatelogpln');

Route::get('/dashboard/LOGOR/AC',['as' => 'log_ac', 'uses' =>'DataController@indexlogac']);
Route::get('/dashboard/LOGOR/AC/tambah','DataController@tambahlogac');
Route::post('/dashboard/LOGOR/AC/store','DataController@storelogac');
Route::post('/dashboard/LOGOR/AC/update','DataController@updatelogac');

Route::get('/dashboard/LOGOR/GENERATOR',['as' => 'log_generator', 'uses' =>'DataController@indexloggenerator']);
Route::get('/dashboard/LOGOR/GENERATOR/tambah','DataController@tambahloggenerator');
Route::post('/dashboard/LOGOR/GENERATOR/store','DataController@storeloggenerator');
Route::post('/dashboard/LOGOR/GENERATOR/update','DataController@updateloggenerator');

Route::get('/dashboard/LOGOR/RECTIFIER',['as' => 'log_rectifier', 'uses' =>'DataController@indexlogrectifier']);
Route::get('/dashboard/LOGOR/RECTIFIER/tambah','DataController@tambahlogrectifier');
Route::post('/dashboard/LOGOR/RECTIFIER/store','DataController@storelogrectifier');
Route::post('/dashboard/LOGOR/RECTIFIER/update','DataController@updatelogrectifier');

Route::get('/dashboard/LOGOR/BATTERE',['as' => 'log_battere', 'uses' =>'DataController@indexlogbattere']);
Route::get('/dashboard/LOGOR/BATTERE/tambah','DataController@tambahlogbattere');
Route::post('/dashboard/LOGOR/BATTERE/store','DataController@storelogbattere');
Route::post('/dashboard/LOGOR/BATTERE/update','DataController@updatelogbattere');

// ==========MAGETAN==========
Route::get('/dashboard/MAGETAN/PLN',['as' => 'mgt_pln', 'uses' =>'DataController@indexmgtpln']);
Route::get('/dashboard/MAGETAN/PLN/tambah','DataController@tambahmgtpln');
Route::post('/dashboard/MAGETAN/PLN/store','DataController@storemgtpln');
Route::post('/dashboard/MAGETAN/PLN/update','DataController@updatemgtpln');

Route::get('/dashboard/MAGETAN/AC',['as' => 'mgt_ac', 'uses' =>'DataController@indexmgtac']);
Route::get('/dashboard/MAGETAN/AC/tambah','DataController@tambahmgtac');
Route::post('/dashboard/MAGETAN/AC/store','DataController@storemgtac');
Route::post('/dashboard/MAGETAN/AC/update','DataController@updatemgtac');

Route::get('/dashboard/MAGETAN/GENERATOR',['as' => 'mgt_generator', 'uses' =>'DataController@indexmgtgenerator']);
Route::get('/dashboard/MAGETAN/GENERATOR/tambah','DataController@tambahmgtgenerator');
Route::post('/dashboard/MAGETAN/GENERATOR/store','DataController@storemgtgenerator');
Route::post('/dashboard/MAGETAN/GENERATOR/update','DataController@updatemgtgenerator');

Route::get('/dashboard/MAGETAN/RECTIFIER',['as' => 'mgt_rectifier', 'uses' =>'DataController@indexmgtrectifier']);
Route::get('/dashboard/MAGETAN/RECTIFIER/tambah','DataController@tambahmgtrectifier');
Route::post('/dashboard/MAGETAN/RECTIFIER/store','DataController@storemgtrectifier');
Route::post('/dashboard/MAGETAN/RECTIFIER/update','DataController@updatemgtrectifier');

Route::get('/dashboard/MAGETAN/BATTERE',['as' => 'mgt_battere', 'uses' =>'DataController@indexmgtbattere']);
Route::get('/dashboard/MAGETAN/BATTERE/tambah','DataController@tambahmgtbattere');
Route::post('/dashboard/MAGETAN/BATTERE/store','DataController@storemgtbattere');
Route::post('/dashboard/MAGETAN/BATTERE/update','DataController@updatemgtbattere');

// ==========STO MADIUN==========
Route::get('/dashboard/STO MADIUN/PLN',['as' => 'mnz_pln', 'uses' =>'DataController@indexmnzpln']);
Route::get('/dashboard/STO MADIUN/PLN/tambah','DataController@tambahmnzpln');
Route::post('/dashboard/STO MADIUN/PLN/store','DataController@storemnzpln');
Route::post('/dashboard/STO MADIUN/PLN/update','DataController@updatemnzpln');

Route::get('/dashboard/STO MADIUN/AC',['as' => 'mnz_ac', 'uses' =>'DataController@indexmnzac']);
Route::get('/dashboard/STO MADIUN/AC/tambah','DataController@tambahmnzac');
Route::post('/dashboard/STO MADIUN/AC/store','DataController@storemnzac');
Route::post('/dashboard/STO MADIUN/AC/update','DataController@updatemnzac');

Route::get('/dashboard/STO MADIUN/GENERATOR',['as' => 'mnz_generator', 'uses' =>'DataController@indexmnzgenerator']);
Route::get('/dashboard/STO MADIUN/GENERATOR/tambah','DataController@tambahmnzgenerator');
Route::post('/dashboard/STO MADIUN/GENERATOR/store','DataController@storemnzgenerator');
Route::post('/dashboard/STO MADIUN/GENERATOR/update','DataController@updatemnzgenerator');

Route::get('/dashboard/STO MADIUN/RECTIFIER',['as' => 'mnz_rectifier', 'uses' =>'DataController@indexmnzrectifier']);
Route::get('/dashboard/STO MADIUN/RECTIFIER/tambah','DataController@tambahmnzrectifier');
Route::post('/dashboard/STO MADIUN/RECTIFIER/store','DataController@storemnzrectifier');
Route::post('/dashboard/STO MADIUN/RECTIFIER/update','DataController@updatemnzrectifier');

Route::get('/dashboard/STO MADIUN/BATTERE',['as' => 'mnz_battere', 'uses' =>'DataController@indexmnzbattere']);
Route::get('/dashboard/STO MADIUN/BATTERE/tambah','DataController@tambahmnzbattere');
Route::post('/dashboard/STO MADIUN/BATTERE/store','DataController@storemnzbattere');
Route::post('/dashboard/STO MADIUN/BATTERE/update','DataController@updatemnzbattere');

// ==========MERAKURAK==========
Route::get('/dashboard/MERAKURAK/PLN',['as' => 'mrr_pln', 'uses' =>'DataController@indexmrrpln']);
Route::get('/dashboard/MERAKURAK/PLN/tambah','DataController@tambahmrrpln');
Route::post('/dashboard/MERAKURAK/PLN/store','DataController@storemrrpln');
Route::post('/dashboard/MERAKURAK/PLN/update','DataController@updatemrrpln');

Route::get('/dashboard/MERAKURAK/AC',['as' => 'mrr_ac', 'uses' =>'DataController@indexmrrac']);
Route::get('/dashboard/MERAKURAK/AC/tambah','DataController@tambahmrrac');
Route::post('/dashboard/MERAKURAK/AC/store','DataController@storemrrac');
Route::post('/dashboard/MERAKURAK/AC/update','DataController@updatemrrac');

Route::get('/dashboard/MERAKURAK/GENERATOR',['as' => 'mrr_generator', 'uses' =>'DataController@indexmrrgenerator']);
Route::get('/dashboard/MERAKURAK/GENERATOR/tambah','DataController@tambahmrrgenerator');
Route::post('/dashboard/MERAKURAK/GENERATOR/store','DataController@storemrrgenerator');
Route::post('/dashboard/MERAKURAK/GENERATOR/update','DataController@updatemrrgenerator');

Route::get('/dashboard/MERAKURAK/RECTIFIER',['as' => 'mrr_rectifier', 'uses' =>'DataController@indexmrrrectifier']);
Route::get('/dashboard/MERAKURAK/RECTIFIER/tambah','DataController@tambahmrrrectifier');
Route::post('/dashboard/MERAKURAK/RECTIFIER/store','DataController@storemrrrectifier');
Route::post('/dashboard/MERAKURAK/RECTIFIER/update','DataController@updatemrrrectifier');

Route::get('/dashboard/MERAKURAK/BATTERE',['as' => 'mrr_battere', 'uses' =>'DataController@indexmrrbattere']);
Route::get('/dashboard/MERAKURAK/BATTERE/tambah','DataController@tambahmrrbattere');
Route::post('/dashboard/MERAKURAK/BATTERE/store','DataController@storemrrbattere');
Route::post('/dashboard/MERAKURAK/BATTERE/update','DataController@updatemrrbattere');

// ==========MAOSPATI==========
Route::get('/dashboard/MAOSPATI/PLN',['as' => 'msp_pln', 'uses' =>'DataController@indexmsppln']);
Route::get('/dashboard/MAOSPATI/PLN/tambah','DataController@tambahmsppln');
Route::post('/dashboard/MAOSPATI/PLN/store','DataController@storemsppln');
Route::post('/dashboard/MAOSPATI/PLN/update','DataController@updatemsppln');

Route::get('/dashboard/MAOSPATI/AC',['as' => 'msp_ac', 'uses' =>'DataController@indexmspac']);
Route::get('/dashboard/MAOSPATI/AC/tambah','DataController@tambahmspac');
Route::post('/dashboard/MAOSPATI/AC/store','DataController@storemspac');
Route::post('/dashboard/MAOSPATI/AC/update','DataController@updatemspac');

Route::get('/dashboard/MAOSPATI/GENERATOR',['as' => 'msp_generator', 'uses' =>'DataController@indexmspgenerator']);
Route::get('/dashboard/MAOSPATI/GENERATOR/tambah','DataController@tambahmspgenerator');
Route::post('/dashboard/MAOSPATI/GENERATOR/store','DataController@storemspgenerator');
Route::post('/dashboard/MAOSPATI/GENERATOR/update','DataController@updatemspgenerator');

Route::get('/dashboard/MAOSPATI/RECTIFIER',['as' => 'msp_rectifier', 'uses' =>'DataController@indexmsprectifier']);
Route::get('/dashboard/MAOSPATI/RECTIFIER/tambah','DataController@tambahmsprectifier');
Route::post('/dashboard/MAOSPATI/RECTIFIER/store','DataController@storemsprectifier');
Route::post('/dashboard/MAOSPATI/RECTIFIER/update','DataController@updatemsprectifier');

Route::get('/dashboard/MAOSPATI/BATTERE',['as' => 'msp_battere', 'uses' =>'DataController@indexmspbattere']);
Route::get('/dashboard/MAOSPATI/BATTERE/tambah','DataController@tambahmspbattere');
Route::post('/dashboard/MAOSPATI/BATTERE/store','DataController@storemspbattere');
Route::post('/dashboard/MAOSPATI/BATTERE/update','DataController@updatemspbattere');

// ==========NGAWI==========
Route::get('/dashboard/NGAWI/PLN',['as' => 'nwi_pln', 'uses' =>'DataController@indexnwipln']);
Route::get('/dashboard/NGAWI/PLN/tambah','DataController@tambahnwipln');
Route::post('/dashboard/NGAWI/PLN/store','DataController@storenwipln');
Route::post('/dashboard/NGAWI/PLN/update','DataController@updatenwipln');

Route::get('/dashboard/NGAWI/AC',['as' => 'nwi_ac', 'uses' =>'DataController@indexnwiac']);
Route::get('/dashboard/NGAWI/AC/tambah','DataController@tambahnwiac');
Route::post('/dashboard/NGAWI/AC/store','DataController@storenwiac');
Route::post('/dashboard/NGAWI/AC/update','DataController@updatenwiac');

Route::get('/dashboard/NGAWI/GENERATOR',['as' => 'nwi_generator', 'uses' =>'DataController@indexnwigenerator']);
Route::get('/dashboard/NGAWI/GENERATOR/tambah','DataController@tambahnwigenerator');
Route::post('/dashboard/NGAWI/GENERATOR/store','DataController@storenwigenerator');
Route::post('/dashboard/NGAWI/GENERATOR/update','DataController@updatenwigenerator');

Route::get('/dashboard/NGAWI/RECTIFIER',['as' => 'nwi_rectifier', 'uses' =>'DataController@indexnwirectifier']);
Route::get('/dashboard/NGAWI/RECTIFIER/tambah','DataController@tambahnwirectifier');
Route::post('/dashboard/NGAWI/RECTIFIER/store','DataController@storenwirectifier');
Route::post('/dashboard/NGAWI/RECTIFIER/update','DataController@updatenwirectifier');

Route::get('/dashboard/NGAWI/BATTERE',['as' => 'nwi_battere', 'uses' =>'DataController@indexnwibattere']);
Route::get('/dashboard/NGAWI/BATTERE/tambah','DataController@tambahnwibattere');
Route::post('/dashboard/NGAWI/BATTERE/store','DataController@storenwibattere');
Route::post('/dashboard/NGAWI/BATTERE/update','DataController@updatenwibattere');

// ==========PULUNG==========
Route::get('/dashboard/PULUNG/PLN',['as' => 'plg_pln', 'uses' =>'DataController@indexplgpln']);
Route::get('/dashboard/PULUNG/PLN/tambah','DataController@tambahplgpln');
Route::post('/dashboard/PULUNG/PLN/store','DataController@storeplgpln');
Route::post('/dashboard/PULUNG/PLN/update','DataController@updateplgpln');

Route::get('/dashboard/PULUNG/AC',['as' => 'plg_ac', 'uses' =>'DataController@indexplgac']);
Route::get('/dashboard/PULUNG/AC/tambah','DataController@tambahplgac');
Route::post('/dashboard/PULUNG/AC/store','DataController@storeplgac');
Route::post('/dashboard/PULUNG/AC/update','DataController@updateplgac');

Route::get('/dashboard/PULUNG/GENERATOR',['as' => 'plg_generator', 'uses' =>'DataController@indexplggenerator']);
Route::get('/dashboard/PULUNG/GENERATOR/tambah','DataController@tambahplggenerator');
Route::post('/dashboard/PULUNG/GENERATOR/store','DataController@storeplggenerator');
Route::post('/dashboard/PULUNG/GENERATOR/update','DataController@updateplggenerator');

Route::get('/dashboard/PULUNG/RECTIFIER',['as' => 'plg_rectifier', 'uses' =>'DataController@indexplgrectifier']);
Route::get('/dashboard/PULUNG/RECTIFIER/tambah','DataController@tambahplgrectifier');
Route::post('/dashboard/PULUNG/RECTIFIER/store','DataController@storeplgrectifier');
Route::post('/dashboard/PULUNG/RECTIFIER/update','DataController@updateplgrectifier');

Route::get('/dashboard/PULUNG/BATTERE',['as' => 'plg_battere', 'uses' =>'DataController@indexplgbattere']);
Route::get('/dashboard/PULUNG/BATTERE/tambah','DataController@tambahplgbattere');
Route::post('/dashboard/PULUNG/BATTERE/store','DataController@storeplgbattere');
Route::post('/dashboard/PULUNG/BATTERE/update','DataController@updateplgbattere');

// ==========PUNUNG==========
Route::get('/dashboard/PUNUNG/PLN',['as' => 'png_pln', 'uses' =>'DataController@indexpngpln']);
Route::get('/dashboard/PUNUNG/PLN/tambah','DataController@tambahpngpln');
Route::post('/dashboard/PUNUNG/PLN/store','DataController@storepngpln');
Route::post('/dashboard/PUNUNG/PLN/update','DataController@updatepngpln');

Route::get('/dashboard/PUNUNG/AC',['as' => 'png_ac', 'uses' =>'DataController@indexpngac']);
Route::get('/dashboard/PUNUNG/AC/tambah','DataController@tambahpngac');
Route::post('/dashboard/PUNUNG/AC/store','DataController@storepngac');
Route::post('/dashboard/PUNUNG/AC/update','DataController@updatepngac');

Route::get('/dashboard/PUNUNG/GENERATOR',['as' => 'png_generator', 'uses' =>'DataController@indexpnggenerator']);
Route::get('/dashboard/PUNUNG/GENERATOR/tambah','DataController@tambahpnggenerator');
Route::post('/dashboard/PUNUNG/GENERATOR/store','DataController@storepnggenerator');
Route::post('/dashboard/PUNUNG/GENERATOR/update','DataController@updatepnggenerator');

Route::get('/dashboard/PUNUNG/RECTIFIER',['as' => 'png_rectifier', 'uses' =>'DataController@indexpngrectifier']);
Route::get('/dashboard/PUNUNG/RECTIFIER/tambah','DataController@tambahpngrectifier');
Route::post('/dashboard/PUNUNG/RECTIFIER/store','DataController@storepngrectifier');
Route::post('/dashboard/PUNUNG/RECTIFIER/update','DataController@updatepngrectifier');

Route::get('/dashboard/PUNUNG/BATTERE',['as' => 'png_battere', 'uses' =>'DataController@indexpngbattere']);
Route::get('/dashboard/PUNUNG/BATTERE/tambah','DataController@tambahpngbattere');
Route::post('/dashboard/PUNUNG/BATTERE/store','DataController@storepngbattere');
Route::post('/dashboard/PUNUNG/BATTERE/update','DataController@updatepngbattere');

// ==========PACITAN==========
Route::get('/dashboard/PACITAN/PLN',['as' => 'pnz_pln', 'uses' =>'DataController@indexpnzpln']);
Route::get('/dashboard/PACITAN/PLN/tambah','DataController@tambahpnzpln');
Route::post('/dashboard/PACITAN/PLN/store','DataController@storepnzpln');
Route::post('/dashboard/PACITAN/PLN/update','DataController@updatepnzpln');

Route::get('/dashboard/PACITAN/AC',['as' => 'pnz_ac', 'uses' =>'DataController@indexpnzac']);
Route::get('/dashboard/PACITAN/AC/tambah','DataController@tambahpnzac');
Route::post('/dashboard/PACITAN/AC/store','DataController@storepnzac');
Route::post('/dashboard/PACITAN/AC/update','DataController@updatepnzac');

Route::get('/dashboard/PACITAN/GENERATOR',['as' => 'pnz_generator', 'uses' =>'DataController@indexpnzgenerator']);
Route::get('/dashboard/PACITAN/GENERATOR/tambah','DataController@tambahpnzgenerator');
Route::post('/dashboard/PACITAN/GENERATOR/store','DataController@storepnzgenerator');
Route::post('/dashboard/PACITAN/GENERATOR/update','DataController@updatepnzgenerator');

Route::get('/dashboard/PACITAN/RECTIFIER',['as' => 'pnz_rectifier', 'uses' =>'DataController@indexpnzrectifier']);
Route::get('/dashboard/PACITAN/RECTIFIER/tambah','DataController@tambahpnzrectifier');
Route::post('/dashboard/PACITAN/RECTIFIER/store','DataController@storepnzrectifier');
Route::post('/dashboard/PACITAN/RECTIFIER/update','DataController@updatepnzrectifier');

Route::get('/dashboard/PACITAN/BATTERE',['as' => 'pnz_battere', 'uses' =>'DataController@indexpnzbattere']);
Route::get('/dashboard/PACITAN/BATTERE/tambah','DataController@tambahpnzbattere');
Route::post('/dashboard/PACITAN/BATTERE/store','DataController@storepnzbattere');
Route::post('/dashboard/PACITAN/BATTERE/update','DataController@updatepnzbattere');

// ==========PONOROGO==========
Route::get('/dashboard/PONOROGO/PLN',['as' => 'pon_pln', 'uses' =>'DataController@indexponpln']);
Route::get('/dashboard/PONOROGO/PLN/tambah','DataController@tambahponpln');
Route::post('/dashboard/PONOROGO/PLN/store','DataController@storeponpln');
Route::post('/dashboard/PONOROGO/PLN/update','DataController@updateponpln');

Route::get('/dashboard/PONOROGO/AC',['as' => 'pon_ac', 'uses' =>'DataController@indexponac']);
Route::get('/dashboard/PONOROGO/AC/tambah','DataController@tambahponac');
Route::post('/dashboard/PONOROGO/AC/store','DataController@storeponac');
Route::post('/dashboard/PONOROGO/AC/update','DataController@updateponac');

Route::get('/dashboard/PONOROGO/GENERATOR',['as' => 'pon_generator', 'uses' =>'DataController@indexpongenerator']);
Route::get('/dashboard/PONOROGO/GENERATOR/tambah','DataController@tambahpongenerator');
Route::post('/dashboard/PONOROGO/GENERATOR/store','DataController@storepongenerator');
Route::post('/dashboard/PONOROGO/GENERATOR/update','DataController@updatepongenerator');

Route::get('/dashboard/PONOROGO/RECTIFIER',['as' => 'pon_rectifier', 'uses' =>'DataController@indexponrectifier']);
Route::get('/dashboard/PONOROGO/RECTIFIER/tambah','DataController@tambahponrectifier');
Route::post('/dashboard/PONOROGO/RECTIFIER/store','DataController@storeponrectifier');
Route::post('/dashboard/PONOROGO/RECTIFIER/update','DataController@updateponrectifier');

Route::get('/dashboard/PONOROGO/BATTERE',['as' => 'pon_battere', 'uses' =>'DataController@indexponbattere']);
Route::get('/dashboard/PONOROGO/BATTERE/tambah','DataController@tambahponbattere');
Route::post('/dashboard/PONOROGO/BATTERE/store','DataController@storeponbattere');
Route::post('/dashboard/PONOROGO/BATTERE/update','DataController@updateponbattere');

// ==========RENGEL==========
Route::get('/dashboard/RENGEL/PLN',['as' => 'rgl_pln', 'uses' =>'DataController@indexrglpln']);
Route::get('/dashboard/RENGEL/PLN/tambah','DataController@tambahrglpln');
Route::post('/dashboard/RENGEL/PLN/store','DataController@storerglpln');
Route::post('/dashboard/RENGEL/PLN/update','DataController@updaterglpln');

Route::get('/dashboard/RENGEL/AC',['as' => 'rgl_ac', 'uses' =>'DataController@indexrglac']);
Route::get('/dashboard/RENGEL/AC/tambah','DataController@tambahrglac');
Route::post('/dashboard/RENGEL/AC/store','DataController@storerglac');
Route::post('/dashboard/RENGEL/AC/update','DataController@updaterglac');

Route::get('/dashboard/RENGEL/GENERATOR',['as' => 'rgl_generator', 'uses' =>'DataController@indexrglgenerator']);
Route::get('/dashboard/RENGEL/GENERATOR/tambah','DataController@tambahrglgenerator');
Route::post('/dashboard/RENGEL/GENERATOR/store','DataController@storerglgenerator');
Route::post('/dashboard/RENGEL/GENERATOR/update','DataController@updaterglgenerator');

Route::get('/dashboard/RENGEL/RECTIFIER',['as' => 'rgl_rectifier', 'uses' =>'DataController@indexrglrectifier']);
Route::get('/dashboard/RENGEL/RECTIFIER/tambah','DataController@tambahrglrectifier');
Route::post('/dashboard/RENGEL/RECTIFIER/store','DataController@storerglrectifier');
Route::post('/dashboard/RENGEL/RECTIFIER/update','DataController@updaterglrectifier');

Route::get('/dashboard/RENGEL/BATTERE',['as' => 'rgl_battere', 'uses' =>'DataController@indexrglbattere']);
Route::get('/dashboard/RENGEL/BATTERE/tambah','DataController@tambahrglbattere');
Route::post('/dashboard/RENGEL/BATTERE/store','DataController@storerglbattere');
Route::post('/dashboard/RENGEL/BATTERE/update','DataController@updaterglbattere');

// ==========SARANGAN==========
Route::get('/dashboard/SARANGAN/PLN',['as' => 'sar_pln', 'uses' =>'DataController@indexsarpln']);
Route::get('/dashboard/SARANGAN/PLN/tambah','DataController@tambahsarpln');
Route::post('/dashboard/SARANGAN/PLN/store','DataController@storesarpln');
Route::post('/dashboard/SARANGAN/PLN/update','DataController@updatesarpln');

Route::get('/dashboard/SARANGAN/AC',['as' => 'sar_ac', 'uses' =>'DataController@indexsarac']);
Route::get('/dashboard/SARANGAN/AC/tambah','DataController@tambahsarac');
Route::post('/dashboard/SARANGAN/AC/store','DataController@storesarac');
Route::post('/dashboard/SARANGAN/AC/update','DataController@updatesarac');

Route::get('/dashboard/SARANGAN/GENERATOR',['as' => 'sar_generator', 'uses' =>'DataController@indexsargenerator']);
Route::get('/dashboard/SARANGAN/GENERATOR/tambah','DataController@tambahsargenerator');
Route::post('/dashboard/SARANGAN/GENERATOR/store','DataController@storesargenerator');
Route::post('/dashboard/SARANGAN/GENERATOR/update','DataController@updatesargenerator');

Route::get('/dashboard/SARANGAN/RECTIFIER',['as' => 'sar_rectifier', 'uses' =>'DataController@indexsarrectifier']);
Route::get('/dashboard/SARANGAN/RECTIFIER/tambah','DataController@tambahsarrectifier');
Route::post('/dashboard/SARANGAN/RECTIFIER/store','DataController@storesarrectifier');
Route::post('/dashboard/SARANGAN/RECTIFIER/update','DataController@updatesarrectifier');

Route::get('/dashboard/SARANGAN/BATTERE',['as' => 'sar_battere', 'uses' =>'DataController@indexsarbattere']);
Route::get('/dashboard/SARANGAN/BATTERE/tambah','DataController@tambahsarbattere');
Route::post('/dashboard/SARANGAN/BATTERE/store','DataController@storesarbattere');
Route::post('/dashboard/SARANGAN/BATTERE/update','DataController@updatesarbattere');

// ==========SAMBIT==========
Route::get('/dashboard/SAMBIT/PLN',['as' => 'sat_pln', 'uses' =>'DataController@indexsatpln']);
Route::get('/dashboard/SAMBIT/PLN/tambah','DataController@tambahsatpln');
Route::post('/dashboard/SAMBIT/PLN/store','DataController@storesatpln');
Route::post('/dashboard/SAMBIT/PLN/update','DataController@updatesatpln');

Route::get('/dashboard/SAMBIT/AC',['as' => 'sat_ac', 'uses' =>'DataController@indexsatac']);
Route::get('/dashboard/SAMBIT/AC/tambah','DataController@tambahsatac');
Route::post('/dashboard/SAMBIT/AC/store','DataController@storesatac');
Route::post('/dashboard/SAMBIT/AC/update','DataController@updatesatac');

Route::get('/dashboard/SAMBIT/GENERATOR',['as' => 'sat_generator', 'uses' =>'DataController@indexsatgenerator']);
Route::get('/dashboard/SAMBIT/GENERATOR/tambah','DataController@tambahsatgenerator');
Route::post('/dashboard/SAMBIT/GENERATOR/store','DataController@storesatgenerator');
Route::post('/dashboard/SAMBIT/GENERATOR/update','DataController@updatesatgenerator');

Route::get('/dashboard/SAMBIT/RECTIFIER',['as' => 'sat_rectifier', 'uses' =>'DataController@indexsatrectifier']);
Route::get('/dashboard/SAMBIT/RECTIFIER/tambah','DataController@tambahsatrectifier');
Route::post('/dashboard/SAMBIT/RECTIFIER/store','DataController@storesatrectifier');
Route::post('/dashboard/SAMBIT/RECTIFIER/update','DataController@updatesatrectifier');

Route::get('/dashboard/SAMBIT/BATTERE',['as' => 'sat_battere', 'uses' =>'DataController@indexsatbattere']);
Route::get('/dashboard/SAMBIT/BATTERE/tambah','DataController@tambahsatbattere');
Route::post('/dashboard/SAMBIT/BATTERE/store','DataController@storesatbattere');
Route::post('/dashboard/SAMBIT/BATTERE/update','DataController@updatesatbattere');

// ==========SLAHUNG==========
Route::get('/dashboard/SLAHUNG/PLN',['as' => 'slh_pln', 'uses' =>'DataController@indexslhpln']);
Route::get('/dashboard/SLAHUNG/PLN/tambah','DataController@tambahslhpln');
Route::post('/dashboard/SLAHUNG/PLN/store','DataController@storeslhpln');
Route::post('/dashboard/SLAHUNG/PLN/update','DataController@updateslhpln');

Route::get('/dashboard/SLAHUNG/AC',['as' => 'slh_ac', 'uses' =>'DataController@indexslhac']);
Route::get('/dashboard/SLAHUNG/AC/tambah','DataController@tambahslhac');
Route::post('/dashboard/SLAHUNG/AC/store','DataController@storeslhac');
Route::post('/dashboard/SLAHUNG/AC/update','DataController@updateslhac');

Route::get('/dashboard/SLAHUNG/GENERATOR',['as' => 'slh_generator', 'uses' =>'DataController@indexslhgenerator']);
Route::get('/dashboard/SLAHUNG/GENERATOR/tambah','DataController@tambahslhgenerator');
Route::post('/dashboard/SLAHUNG/GENERATOR/store','DataController@storeslhgenerator');
Route::post('/dashboard/SLAHUNG/GENERATOR/update','DataController@updateslhgenerator');

Route::get('/dashboard/SLAHUNG/RECTIFIER',['as' => 'slh_rectifier', 'uses' =>'DataController@indexslhrectifier']);
Route::get('/dashboard/SLAHUNG/RECTIFIER/tambah','DataController@tambahslhrectifier');
Route::post('/dashboard/SLAHUNG/RECTIFIER/store','DataController@storeslhrectifier');
Route::post('/dashboard/SLAHUNG/RECTIFIER/update','DataController@updateslhrectifier');

Route::get('/dashboard/SLAHUNG/BATTERE',['as' => 'slh_battere', 'uses' =>'DataController@indexslhbattere']);
Route::get('/dashboard/SLAHUNG/BATTERE/tambah','DataController@tambahslhbattere');
Route::post('/dashboard/SLAHUNG/BATTERE/store','DataController@storeslhbattere');
Route::post('/dashboard/SLAHUNG/BATTERE/update','DataController@updateslhbattere');

// ==========SUMBERREJO==========
Route::get('/dashboard/SUMBERREJO/PLN',['as' => 'smj_pln', 'uses' =>'DataController@indexsmjpln']);
Route::get('/dashboard/SUMBERREJO/PLN/tambah','DataController@tambahsmjpln');
Route::post('/dashboard/SUMBERREJO/PLN/store','DataController@storesmjpln');
Route::post('/dashboard/SUMBERREJO/PLN/update','DataController@updatesmjpln');

Route::get('/dashboard/SUMBERREJO/AC',['as' => 'smj_ac', 'uses' =>'DataController@indexsmjac']);
Route::get('/dashboard/SUMBERREJO/AC/tambah','DataController@tambahsmjac');
Route::post('/dashboard/SUMBERREJO/AC/store','DataController@storesmjac');
Route::post('/dashboard/SUMBERREJO/AC/update','DataController@updatesmjac');

Route::get('/dashboard/SUMBERREJO/GENERATOR',['as' => 'smj_generator', 'uses' =>'DataController@indexsmjgenerator']);
Route::get('/dashboard/SUMBERREJO/GENERATOR/tambah','DataController@tambahsmjgenerator');
Route::post('/dashboard/SUMBERREJO/GENERATOR/store','DataController@storesmjgenerator');
Route::post('/dashboard/SUMBERREJO/GENERATOR/update','DataController@updatesmjgenerator');

Route::get('/dashboard/SUMBERREJO/RECTIFIER',['as' => 'smj_rectifier', 'uses' =>'DataController@indexsmjrectifier']);
Route::get('/dashboard/SUMBERREJO/RECTIFIER/tambah','DataController@tambahsmjrectifier');
Route::post('/dashboard/SUMBERREJO/RECTIFIER/store','DataController@storesmjrectifier');
Route::post('/dashboard/SUMBERREJO/RECTIFIER/update','DataController@updatesmjrectifier');

Route::get('/dashboard/SUMBERREJO/BATTERE',['as' => 'smj_battere', 'uses' =>'DataController@indexsmjbattere']);
Route::get('/dashboard/SUMBERREJO/BATTERE/tambah','DataController@tambahsmjbattere');
Route::post('/dashboard/SUMBERREJO/BATTERE/store','DataController@storesmjbattere');
Route::post('/dashboard/SUMBERREJO/BATTERE/update','DataController@updatesmjbattere');

// ==========SUMOROTO==========
Route::get('/dashboard/SUMOROTO/PLN',['as' => 'smo_pln', 'uses' =>'DataController@indexsmopln']);
Route::get('/dashboard/SUMOROTO/PLN/tambah','DataController@tambahsmopln');
Route::post('/dashboard/SUMOROTO/PLN/store','DataController@storesmopln');
Route::post('/dashboard/SUMOROTO/PLN/update','DataController@updatesmopln');

Route::get('/dashboard/SUMOROTO/AC',['as' => 'smo_ac', 'uses' =>'DataController@indexsmoac']);
Route::get('/dashboard/SUMOROTO/AC/tambah','DataController@tambahsmoac');
Route::post('/dashboard/SUMOROTO/AC/store','DataController@storesmoac');
Route::post('/dashboard/SUMOROTO/AC/update','DataController@updatesmoac');

Route::get('/dashboard/SUMOROTO/GENERATOR',['as' => 'smo_generator', 'uses' =>'DataController@indexsmogenerator']);
Route::get('/dashboard/SUMOROTO/GENERATOR/tambah','DataController@tambahsmogenerator');
Route::post('/dashboard/SUMOROTO/GENERATOR/store','DataController@storesmogenerator');
Route::post('/dashboard/SUMOROTO/GENERATOR/update','DataController@updatesmogenerator');

Route::get('/dashboard/SUMOROTO/RECTIFIER',['as' => 'smo_rectifier', 'uses' =>'DataController@indexsmorectifier']);
Route::get('/dashboard/SUMOROTO/RECTIFIER/tambah','DataController@tambahsmorectifier');
Route::post('/dashboard/SUMOROTO/RECTIFIER/store','DataController@storesmorectifier');
Route::post('/dashboard/SUMOROTO/RECTIFIER/update','DataController@updatesmorectifier');

Route::get('/dashboard/SUMOROTO/BATTERE',['as' => 'smo_battere', 'uses' =>'DataController@indexsmobattere']);
Route::get('/dashboard/SUMOROTO/BATTERE/tambah','DataController@tambahsmobattere');
Route::post('/dashboard/SUMOROTO/BATTERE/store','DataController@storesmobattere');
Route::post('/dashboard/SUMOROTO/BATTERE/update','DataController@updatesmobattere');

// ==========TUBAN==========
Route::get('/dashboard/TUBAN/PLN',['as' => 'tnz_pln', 'uses' =>'DataController@indextnzpln']);
Route::get('/dashboard/TUBAN/PLN/tambah','DataController@tambahtnzpln');
Route::post('/dashboard/TUBAN/PLN/store','DataController@storetnzpln');
Route::post('/dashboard/TUBAN/PLN/update','DataController@updatetnzpln');

Route::get('/dashboard/TUBAN/AC',['as' => 'tnz_ac', 'uses' =>'DataController@indextnzac']);
Route::get('/dashboard/TUBAN/AC/tambah','DataController@tambahtnzac');
Route::post('/dashboard/TUBAN/AC/store','DataController@storetnzac');
Route::post('/dashboard/TUBAN/AC/update','DataController@updatetnzac');

Route::get('/dashboard/TUBAN/GENERATOR',['as' => 'tnz_generator', 'uses' =>'DataController@indextnzgenerator']);
Route::get('/dashboard/TUBAN/GENERATOR/tambah','DataController@tambahtnzgenerator');
Route::post('/dashboard/TUBAN/GENERATOR/store','DataController@storetnzgenerator');
Route::post('/dashboard/TUBAN/GENERATOR/update','DataController@updatetnzgenerator');

Route::get('/dashboard/TUBAN/RECTIFIER',['as' => 'tnz_rectifier', 'uses' =>'DataController@indextnzrectifier']);
Route::get('/dashboard/TUBAN/RECTIFIER/tambah','DataController@tambahtnzrectifier');
Route::post('/dashboard/TUBAN/RECTIFIER/store','DataController@storetnzrectifier');
Route::post('/dashboard/TUBAN/RECTIFIER/update','DataController@updatetnzrectifier');

Route::get('/dashboard/TUBAN/BATTERE',['as' => 'tnz_battere', 'uses' =>'DataController@indextnzbattere']);
Route::get('/dashboard/TUBAN/BATTERE/tambah','DataController@tambahtnzbattere');
Route::post('/dashboard/TUBAN/BATTERE/store','DataController@storetnzbattere');
Route::post('/dashboard/TUBAN/BATTERE/update','DataController@updatetnzbattere');

// ==========UTERAN==========
Route::get('/dashboard/UTERAN/PLN',['as' => 'utr_pln', 'uses' =>'DataController@indexutrpln']);
Route::get('/dashboard/UTERAN/PLN/tambah','DataController@tambahutrpln');
Route::post('/dashboard/UTERAN/PLN/store','DataController@storeutrpln');
Route::post('/dashboard/UTERAN/PLN/update','DataController@updateutrpln');

Route::get('/dashboard/UTERAN/AC',['as' => 'utr_ac', 'uses' =>'DataController@indexutrac']);
Route::get('/dashboard/UTERAN/AC/tambah','DataController@tambahutrac');
Route::post('/dashboard/UTERAN/AC/store','DataController@storeutrac');
Route::post('/dashboard/UTERAN/AC/update','DataController@updateutrac');

Route::get('/dashboard/UTERAN/GENERATOR',['as' => 'utr_generator', 'uses' =>'DataController@indexutrgenerator']);
Route::get('/dashboard/UTERAN/GENERATOR/tambah','DataController@tambahutrgenerator');
Route::post('/dashboard/UTERAN/GENERATOR/store','DataController@storeutrgenerator');
Route::post('/dashboard/UTERAN/GENERATOR/update','DataController@updateutrgenerator');

Route::get('/dashboard/UTERAN/RECTIFIER',['as' => 'utr_rectifier', 'uses' =>'DataController@indexutrrectifier']);
Route::get('/dashboard/UTERAN/RECTIFIER/tambah','DataController@tambahutrrectifier');
Route::post('/dashboard/UTERAN/RECTIFIER/store','DataController@storeutrrectifier');
Route::post('/dashboard/UTERAN/RECTIFIER/update','DataController@updateutrrectifier');

Route::get('/dashboard/UTERAN/BATTERE',['as' => 'utr_battere', 'uses' =>'DataController@indexutrbattere']);
Route::get('/dashboard/UTERAN/BATTERE/tambah','DataController@tambahutrbattere');
Route::post('/dashboard/UTERAN/BATTERE/store','DataController@storeutrbattere');
Route::post('/dashboard/UTERAN/BATTERE/update','DataController@updateutrbattere');

// ==========WALIKUKUN==========
Route::get('/dashboard/WALIKUKUN/PLN',['as' => 'wku_pln', 'uses' =>'DataController@indexwkupln']);
Route::get('/dashboard/WALIKUKUN/PLN/tambah','DataController@tambahwkupln');
Route::post('/dashboard/WALIKUKUN/PLN/store','DataController@storewkupln');
Route::post('/dashboard/WALIKUKUN/PLN/update','DataController@updatewkupln');

Route::get('/dashboard/WALIKUKUN/AC',['as' => 'wku_ac', 'uses' =>'DataController@indexwkuac']);
Route::get('/dashboard/WALIKUKUN/AC/tambah','DataController@tambahwkuac');
Route::post('/dashboard/WALIKUKUN/AC/store','DataController@storewkuac');
Route::post('/dashboard/WALIKUKUN/AC/update','DataController@updatewkuac');

Route::get('/dashboard/WALIKUKUN/GENERATOR',['as' => 'wku_generator', 'uses' =>'DataController@indexwkugenerator']);
Route::get('/dashboard/WALIKUKUN/GENERATOR/tambah','DataController@tambahwkugenerator');
Route::post('/dashboard/WALIKUKUN/GENERATOR/store','DataController@storewkugenerator');
Route::post('/dashboard/WALIKUKUN/GENERATOR/update','DataController@updatewkugenerator');

Route::get('/dashboard/WALIKUKUN/RECTIFIER',['as' => 'wku_rectifier', 'uses' =>'DataController@indexwkurectifier']);
Route::get('/dashboard/WALIKUKUN/RECTIFIER/tambah','DataController@tambahwkurectifier');
Route::post('/dashboard/WALIKUKUN/RECTIFIER/store','DataController@storewkurectifier');
Route::post('/dashboard/WALIKUKUN/RECTIFIER/update','DataController@updatewkurectifier');

Route::get('/dashboard/WALIKUKUN/BATTERE',['as' => 'wku_battere', 'uses' =>'DataController@indexwkubattere']);
Route::get('/dashboard/WALIKUKUN/BATTERE/tambah','DataController@tambahwkubattere');
Route::post('/dashboard/WALIKUKUN/BATTERE/store','DataController@storewkubattere');
Route::post('/dashboard/WALIKUKUN/BATTERE/update','DataController@updatewkubattere');










// ==========AMBUNTEN PM==========
Route::get('/dashboard/AMBUNTEN PM/PLN',['as' => 'abt_pln', 'uses' =>'DataController@indexabtpln']);
Route::get('/dashboard/AMBUNTEN PM/PLN/tambah','DataController@tambahabtpln');
Route::post('/dashboard/AMBUNTEN PM/PLN/store','DataController@storeabtpln');
Route::post('/dashboard/AMBUNTEN PM/PLN/update','DataController@updateabtpln');

Route::get('/dashboard/AMBUNTEN PM/AC',['as' => 'abt_ac', 'uses' =>'DataController@indexabtac']);
Route::get('/dashboard/AMBUNTEN PM/AC/tambah','DataController@tambahabtac');
Route::post('/dashboard/AMBUNTEN PM/AC/store','DataController@storeabtac');
Route::post('/dashboard/AMBUNTEN PM/AC/update','DataController@updateabtac');

Route::get('/dashboard/AMBUNTEN PM/GENERATOR',['as' => 'abt_generator', 'uses' =>'DataController@indexabtgenerator']);
Route::get('/dashboard/AMBUNTEN PM/GENERATOR/tambah','DataController@tambahabtgenerator');
Route::post('/dashboard/AMBUNTEN PM/GENERATOR/store','DataController@storeabtgenerator');
Route::post('/dashboard/AMBUNTEN PM/GENERATOR/update','DataController@updateabtgenerator');

Route::get('/dashboard/AMBUNTEN PM/RECTIFIER',['as' => 'abt_rectifier', 'uses' =>'DataController@indexabtrectifier']);
Route::get('/dashboard/AMBUNTEN PM/RECTIFIER/tambah','DataController@tambahabtrectifier');
Route::post('/dashboard/AMBUNTEN PM/RECTIFIER/store','DataController@storeabtrectifier');
Route::post('/dashboard/AMBUNTEN PM/RECTIFIER/update','DataController@updateabtrectifier');

Route::get('/dashboard/AMBUNTEN PM/BATTERE',['as' => 'abt_battere', 'uses' =>'DataController@indexabtbattere']);
Route::get('/dashboard/AMBUNTEN PM/BATTERE/tambah','DataController@tambahabtbattere');
Route::post('/dashboard/AMBUNTEN PM/BATTERE/store','DataController@storeabtbattere');
Route::post('/dashboard/AMBUNTEN PM/BATTERE/update','DataController@updateabtbattere');

// ==========AROSBAYA==========
Route::get('/dashboard/AROSBAYA/PLN',['as' => 'arb_pln', 'uses' =>'DataController@indexarbpln']);
Route::get('/dashboard/AROSBAYA/PLN/tambah','DataController@tambaharbpln');
Route::post('/dashboard/AROSBAYA/PLN/store','DataController@storearbpln');
Route::post('/dashboard/AROSBAYA/PLN/update','DataController@updatearbpln');

Route::get('/dashboard/AROSBAYA/AC',['as' => 'arb_ac', 'uses' =>'DataController@indexarbac']);
Route::get('/dashboard/AROSBAYA/AC/tambah','DataController@tambaharbac');
Route::post('/dashboard/AROSBAYA/AC/store','DataController@storearbac');
Route::post('/dashboard/AROSBAYA/AC/update','DataController@updatearbac');

Route::get('/dashboard/AROSBAYA/GENERATOR',['as' => 'arb_generator', 'uses' =>'DataController@indexarbgenerator']);
Route::get('/dashboard/AROSBAYA/GENERATOR/tambah','DataController@tambaharbgenerator');
Route::post('/dashboard/AROSBAYA/GENERATOR/store','DataController@storearbgenerator');
Route::post('/dashboard/AROSBAYA/GENERATOR/update','DataController@updatearbgenerator');

Route::get('/dashboard/AROSBAYA/RECTIFIER',['as' => 'arb_rectifier', 'uses' =>'DataController@indexarbrectifier']);
Route::get('/dashboard/AROSBAYA/RECTIFIER/tambah','DataController@tambaharbrectifier');
Route::post('/dashboard/AROSBAYA/RECTIFIER/store','DataController@storearbrectifier');
Route::post('/dashboard/AROSBAYA/RECTIFIER/update','DataController@updatearbrectifier');

Route::get('/dashboard/AROSBAYA/BATTERE',['as' => 'arb_battere', 'uses' =>'DataController@indexarbbattere']);
Route::get('/dashboard/AROSBAYA/BATTERE/tambah','DataController@tambaharbbattere');
Route::post('/dashboard/AROSBAYA/BATTERE/store','DataController@storearbbattere');
Route::post('/dashboard/AROSBAYA/BATTERE/update','DataController@updatearbbattere');

// ==========BATANG BATANG==========
Route::get('/dashboard/BATANG BATANG/PLN',['as' => 'bab_pln', 'uses' =>'DataController@indexbabpln']);
Route::get('/dashboard/BATANG BATANG/PLN/tambah','DataController@tambahbabpln');
Route::post('/dashboard/BATANG BATANG/PLN/store','DataController@storebabpln');
Route::post('/dashboard/BATANG BATANG/PLN/update','DataController@updatebabpln');

Route::get('/dashboard/BATANG BATANG/AC',['as' => 'bab_ac', 'uses' =>'DataController@indexbabac']);
Route::get('/dashboard/BATANG BATANG/AC/tambah','DataController@tambahbabac');
Route::post('/dashboard/BATANG BATANG/AC/store','DataController@storebabac');
Route::post('/dashboard/BATANG BATANG/AC/update','DataController@updatebabac');

Route::get('/dashboard/BATANG BATANG/GENERATOR',['as' => 'bab_generator', 'uses' =>'DataController@indexbabgenerator']);
Route::get('/dashboard/BATANG BATANG/GENERATOR/tambah','DataController@tambahbabgenerator');
Route::post('/dashboard/BATANG BATANG/GENERATOR/store','DataController@storebabgenerator');
Route::post('/dashboard/BATANG BATANG/GENERATOR/update','DataController@updatebabgenerator');

Route::get('/dashboard/BATANG BATANG/RECTIFIER',['as' => 'bab_rectifier', 'uses' =>'DataController@indexbabrectifier']);
Route::get('/dashboard/BATANG BATANG/RECTIFIER/tambah','DataController@tambahbabrectifier');
Route::post('/dashboard/BATANG BATANG/RECTIFIER/store','DataController@storebabrectifier');
Route::post('/dashboard/BATANG BATANG/RECTIFIER/update','DataController@updatebabrectifier');

Route::get('/dashboard/BATANG BATANG/BATTERE',['as' => 'bab_battere', 'uses' =>'DataController@indexbabbattere']);
Route::get('/dashboard/BATANG BATANG/BATTERE/tambah','DataController@tambahbabbattere');
Route::post('/dashboard/BATANG BATANG/BATTERE/store','DataController@storebabbattere');
Route::post('/dashboard/BATANG BATANG/BATTERE/update','DataController@updatebabbattere');

// ==========BANGKALAN==========
Route::get('/dashboard/BANGKALAN/PLN',['as' => 'bkl_pln', 'uses' =>'DataController@indexbklpln']);
Route::get('/dashboard/BANGKALAN/PLN/tambah','DataController@tambahbklpln');
Route::post('/dashboard/BANGKALAN/PLN/store','DataController@storebklpln');
Route::post('/dashboard/BANGKALAN/PLN/update','DataController@updatebklpln');

Route::get('/dashboard/BANGKALAN/AC',['as' => 'bkl_ac', 'uses' =>'DataController@indexbklac']);
Route::get('/dashboard/BANGKALAN/AC/tambah','DataController@tambahbklac');
Route::post('/dashboard/BANGKALAN/AC/store','DataController@storebklac');
Route::post('/dashboard/BANGKALAN/AC/update','DataController@updatebklac');

Route::get('/dashboard/BANGKALAN/GENERATOR',['as' => 'bkl_generator', 'uses' =>'DataController@indexbklgenerator']);
Route::get('/dashboard/BANGKALAN/GENERATOR/tambah','DataController@tambahbklgenerator');
Route::post('/dashboard/BANGKALAN/GENERATOR/store','DataController@storebklgenerator');
Route::post('/dashboard/BANGKALAN/GENERATOR/update','DataController@updatebklgenerator');

Route::get('/dashboard/BANGKALAN/RECTIFIER',['as' => 'bkl_rectifier', 'uses' =>'DataController@indexbklrectifier']);
Route::get('/dashboard/BANGKALAN/RECTIFIER/tambah','DataController@tambahbklrectifier');
Route::post('/dashboard/BANGKALAN/RECTIFIER/store','DataController@storebklrectifier');
Route::post('/dashboard/BANGKALAN/RECTIFIER/update','DataController@updatebklrectifier');

Route::get('/dashboard/BANGKALAN/BATTERE',['as' => 'bkl_battere', 'uses' =>'DataController@indexbklbattere']);
Route::get('/dashboard/BANGKALAN/BATTERE/tambah','DataController@tambahbklbattere');
Route::post('/dashboard/BANGKALAN/BATTERE/store','DataController@storebklbattere');
Route::post('/dashboard/BANGKALAN/BATTERE/update','DataController@updatebklbattere');

// ==========BLEGA==========
Route::get('/dashboard/BLEGA/PLN',['as' => 'blg_pln', 'uses' =>'DataController@indexblgpln']);
Route::get('/dashboard/BLEGA/PLN/tambah','DataController@tambahblgpln');
Route::post('/dashboard/BLEGA/PLN/store','DataController@storeblgpln');
Route::post('/dashboard/BLEGA/PLN/update','DataController@updateblgpln');

Route::get('/dashboard/BLEGA/AC',['as' => 'blg_ac', 'uses' =>'DataController@indexblgac']);
Route::get('/dashboard/BLEGA/AC/tambah','DataController@tambahblgac');
Route::post('/dashboard/BLEGA/AC/store','DataController@storeblgac');
Route::post('/dashboard/BLEGA/AC/update','DataController@updateblgac');

Route::get('/dashboard/BLEGA/GENERATOR',['as' => 'blg_generator', 'uses' =>'DataController@indexblggenerator']);
Route::get('/dashboard/BLEGA/GENERATOR/tambah','DataController@tambahblggenerator');
Route::post('/dashboard/BLEGA/GENERATOR/store','DataController@storeblggenerator');
Route::post('/dashboard/BLEGA/GENERATOR/update','DataController@updateblggenerator');

Route::get('/dashboard/BLEGA/RECTIFIER',['as' => 'blg_rectifier', 'uses' =>'DataController@indexblgrectifier']);
Route::get('/dashboard/BLEGA/RECTIFIER/tambah','DataController@tambahblgrectifier');
Route::post('/dashboard/BLEGA/RECTIFIER/store','DataController@storeblgrectifier');
Route::post('/dashboard/BLEGA/RECTIFIER/update','DataController@updateblgrectifier');

Route::get('/dashboard/BLEGA/BATTERE',['as' => 'blg_battere', 'uses' =>'DataController@indexblgbattere']);
Route::get('/dashboard/BLEGA/BATTERE/tambah','DataController@tambahblgbattere');
Route::post('/dashboard/BLEGA/BATTERE/store','DataController@storeblgbattere');
Route::post('/dashboard/BLEGA/BATTERE/update','DataController@updateblgbattere');

// ==========KANGEAN==========
Route::get('/dashboard/KANGEAN/PLN',['as' => 'kgn_pln', 'uses' =>'DataController@indexkgnpln']);
Route::get('/dashboard/KANGEAN/PLN/tambah','DataController@tambahkgnpln');
Route::post('/dashboard/KANGEAN/PLN/store','DataController@storekgnpln');
Route::post('/dashboard/KANGEAN/PLN/update','DataController@updatekgnpln');

Route::get('/dashboard/KANGEAN/AC',['as' => 'kgn_ac', 'uses' =>'DataController@indexkgnac']);
Route::get('/dashboard/KANGEAN/AC/tambah','DataController@tambahkgnac');
Route::post('/dashboard/KANGEAN/AC/store','DataController@storekgnac');
Route::post('/dashboard/KANGEAN/AC/update','DataController@updatekgnac');

Route::get('/dashboard/KANGEAN/GENERATOR',['as' => 'kgn_generator', 'uses' =>'DataController@indexkgngenerator']);
Route::get('/dashboard/KANGEAN/GENERATOR/tambah','DataController@tambahkgngenerator');
Route::post('/dashboard/KANGEAN/GENERATOR/store','DataController@storekgngenerator');
Route::post('/dashboard/KANGEAN/GENERATOR/update','DataController@updatekgngenerator');

Route::get('/dashboard/KANGEAN/RECTIFIER',['as' => 'kgn_rectifier', 'uses' =>'DataController@indexkgnrectifier']);
Route::get('/dashboard/KANGEAN/RECTIFIER/tambah','DataController@tambahkgnrectifier');
Route::post('/dashboard/KANGEAN/RECTIFIER/store','DataController@storekgnrectifier');
Route::post('/dashboard/KANGEAN/RECTIFIER/update','DataController@updatekgnrectifier');

Route::get('/dashboard/KANGEAN/BATTERE',['as' => 'kgn_battere', 'uses' =>'DataController@indexkgnbattere']);
Route::get('/dashboard/KANGEAN/BATTERE/tambah','DataController@tambahkgnbattere');
Route::post('/dashboard/KANGEAN/BATTERE/store','DataController@storekgnbattere');
Route::post('/dashboard/KANGEAN/BATTERE/update','DataController@updatekgnbattere');

// ==========KAMAL==========
Route::get('/dashboard/KAMAL/PLN',['as' => 'kml_pln', 'uses' =>'DataController@indexkmlpln']);
Route::get('/dashboard/KAMAL/PLN/tambah','DataController@tambahkmlpln');
Route::post('/dashboard/KAMAL/PLN/store','DataController@storekmlpln');
Route::post('/dashboard/KAMAL/PLN/update','DataController@updatekmlpln');

Route::get('/dashboard/KAMAL/AC',['as' => 'kml_ac', 'uses' =>'DataController@indexkmlac']);
Route::get('/dashboard/KAMAL/AC/tambah','DataController@tambahkmlac');
Route::post('/dashboard/KAMAL/AC/store','DataController@storekmlac');
Route::post('/dashboard/KAMAL/AC/update','DataController@updatekmlac');

Route::get('/dashboard/KAMAL/GENERATOR',['as' => 'kml_generator', 'uses' =>'DataController@indexkmlgenerator']);
Route::get('/dashboard/KAMAL/GENERATOR/tambah','DataController@tambahkmlgenerator');
Route::post('/dashboard/KAMAL/GENERATOR/store','DataController@storekmlgenerator');
Route::post('/dashboard/KAMAL/GENERATOR/update','DataController@updatekmlgenerator');

Route::get('/dashboard/KAMAL/RECTIFIER',['as' => 'kml_rectifier', 'uses' =>'DataController@indexkmlrectifier']);
Route::get('/dashboard/KAMAL/RECTIFIER/tambah','DataController@tambahkmlrectifier');
Route::post('/dashboard/KAMAL/RECTIFIER/store','DataController@storekmlrectifier');
Route::post('/dashboard/KAMAL/RECTIFIER/update','DataController@updatekmlrectifier');

Route::get('/dashboard/KAMAL/BATTERE',['as' => 'kml_battere', 'uses' =>'DataController@indexkmlbattere']);
Route::get('/dashboard/KAMAL/BATTERE/tambah','DataController@tambahkmlbattere');
Route::post('/dashboard/KAMAL/BATTERE/store','DataController@storekmlbattere');
Route::post('/dashboard/KAMAL/BATTERE/update','DataController@updatekmlbattere');

// ==========KETAPANG2==========
Route::get('/dashboard/KETAPANG2/PLN',['as' => 'kpp_pln', 'uses' =>'DataController@indexkpppln']);
Route::get('/dashboard/KETAPANG2/PLN/tambah','DataController@tambahkpppln');
Route::post('/dashboard/KETAPANG2/PLN/store','DataController@storekpppln');
Route::post('/dashboard/KETAPANG2/PLN/update','DataController@updatekpppln');

Route::get('/dashboard/KETAPANG2/AC',['as' => 'kpp_ac', 'uses' =>'DataController@indexkppac']);
Route::get('/dashboard/KETAPANG2/AC/tambah','DataController@tambahkppac');
Route::post('/dashboard/KETAPANG2/AC/store','DataController@storekppac');
Route::post('/dashboard/KETAPANG2/AC/update','DataController@updatekppac');

Route::get('/dashboard/KETAPANG2/GENERATOR',['as' => 'kpp_generator', 'uses' =>'DataController@indexkppgenerator']);
Route::get('/dashboard/KETAPANG2/GENERATOR/tambah','DataController@tambahkppgenerator');
Route::post('/dashboard/KETAPANG2/GENERATOR/store','DataController@storekppgenerator');
Route::post('/dashboard/KETAPANG2/GENERATOR/update','DataController@updatekppgenerator');

Route::get('/dashboard/KETAPANG2/RECTIFIER',['as' => 'kpp_rectifier', 'uses' =>'DataController@indexkpprectifier']);
Route::get('/dashboard/KETAPANG2/RECTIFIER/tambah','DataController@tambahkpprectifier');
Route::post('/dashboard/KETAPANG2/RECTIFIER/store','DataController@storekpprectifier');
Route::post('/dashboard/KETAPANG2/RECTIFIER/update','DataController@updatekpprectifier');

Route::get('/dashboard/KETAPANG2/BATTERE',['as' => 'kpp_battere', 'uses' =>'DataController@indexkppbattere']);
Route::get('/dashboard/KETAPANG2/BATTERE/tambah','DataController@tambahkppbattere');
Route::post('/dashboard/KETAPANG2/BATTERE/store','DataController@storekppbattere');
Route::post('/dashboard/KETAPANG2/BATTERE/update','DataController@updatekppbattere');

// ==========MASALEMBO==========
Route::get('/dashboard/MASALEMBO/PLN',['as' => 'mlb_pln', 'uses' =>'DataController@indexmlbpln']);
Route::get('/dashboard/MASALEMBO/PLN/tambah','DataController@tambahmlbpln');
Route::post('/dashboard/MASALEMBO/PLN/store','DataController@storemlbpln');
Route::post('/dashboard/MASALEMBO/PLN/update','DataController@updatemlbpln');

Route::get('/dashboard/MASALEMBO/AC',['as' => 'mlb_ac', 'uses' =>'DataController@indexmlbac']);
Route::get('/dashboard/MASALEMBO/AC/tambah','DataController@tambahmlbac');
Route::post('/dashboard/MASALEMBO/AC/store','DataController@storemlbac');
Route::post('/dashboard/MASALEMBO/AC/update','DataController@updatemlbac');

Route::get('/dashboard/MASALEMBO/GENERATOR',['as' => 'mlb_generator', 'uses' =>'DataController@indexmlbgenerator']);
Route::get('/dashboard/MASALEMBO/GENERATOR/tambah','DataController@tambahmlbgenerator');
Route::post('/dashboard/MASALEMBO/GENERATOR/store','DataController@storemlbgenerator');
Route::post('/dashboard/MASALEMBO/GENERATOR/update','DataController@updatemlbgenerator');

Route::get('/dashboard/MASALEMBO/RECTIFIER',['as' => 'mlb_rectifier', 'uses' =>'DataController@indexmlbrectifier']);
Route::get('/dashboard/MASALEMBO/RECTIFIER/tambah','DataController@tambahmlbrectifier');
Route::post('/dashboard/MASALEMBO/RECTIFIER/store','DataController@storemlbrectifier');
Route::post('/dashboard/MASALEMBO/RECTIFIER/update','DataController@updatemlbrectifier');

Route::get('/dashboard/MASALEMBO/BATTERE',['as' => 'mlb_battere', 'uses' =>'DataController@indexmlbbattere']);
Route::get('/dashboard/MASALEMBO/BATTERE/tambah','DataController@tambahmlbbattere');
Route::post('/dashboard/MASALEMBO/BATTERE/store','DataController@storemlbbattere');
Route::post('/dashboard/MASALEMBO/BATTERE/update','DataController@updatemlbbattere');

// ==========OMBEN==========
Route::get('/dashboard/OMBEN/PLN',['as' => 'omb_pln', 'uses' =>'DataController@indexombpln']);
Route::get('/dashboard/OMBEN/PLN/tambah','DataController@tambahombpln');
Route::post('/dashboard/OMBEN/PLN/store','DataController@storeombpln');
Route::post('/dashboard/OMBEN/PLN/update','DataController@updateombpln');

Route::get('/dashboard/OMBEN/AC',['as' => 'omb_ac', 'uses' =>'DataController@indexombac']);
Route::get('/dashboard/OMBEN/AC/tambah','DataController@tambahombac');
Route::post('/dashboard/OMBEN/AC/store','DataController@storeombac');
Route::post('/dashboard/OMBEN/AC/update','DataController@updateombac');

Route::get('/dashboard/OMBEN/GENERATOR',['as' => 'omb_generator', 'uses' =>'DataController@indexombgenerator']);
Route::get('/dashboard/OMBEN/GENERATOR/tambah','DataController@tambahombgenerator');
Route::post('/dashboard/OMBEN/GENERATOR/store','DataController@storeombgenerator');
Route::post('/dashboard/OMBEN/GENERATOR/update','DataController@updateombgenerator');

Route::get('/dashboard/OMBEN/RECTIFIER',['as' => 'omb_rectifier', 'uses' =>'DataController@indexombrectifier']);
Route::get('/dashboard/OMBEN/RECTIFIER/tambah','DataController@tambahombrectifier');
Route::post('/dashboard/OMBEN/RECTIFIER/store','DataController@storeombrectifier');
Route::post('/dashboard/OMBEN/RECTIFIER/update','DataController@updateombrectifier');

Route::get('/dashboard/OMBEN/BATTERE',['as' => 'omb_battere', 'uses' =>'DataController@indexombbattere']);
Route::get('/dashboard/OMBEN/BATTERE/tambah','DataController@tambahombbattere');
Route::post('/dashboard/OMBEN/BATTERE/store','DataController@storeombbattere');
Route::post('/dashboard/OMBEN/BATTERE/update','DataController@updateombbattere');

// ==========PAMEKASAN==========
Route::get('/dashboard/PAMEKASAN/PLN',['as' => 'pme_pln', 'uses' =>'DataController@indexpmepln']);
Route::get('/dashboard/PAMEKASAN/PLN/tambah','DataController@tambahpmepln');
Route::post('/dashboard/PAMEKASAN/PLN/store','DataController@storepmepln');
Route::post('/dashboard/PAMEKASAN/PLN/update','DataController@updatepmepln');

Route::get('/dashboard/PAMEKASAN/AC',['as' => 'pme_ac', 'uses' =>'DataController@indexpmeac']);
Route::get('/dashboard/PAMEKASAN/AC/tambah','DataController@tambahpmeac');
Route::post('/dashboard/PAMEKASAN/AC/store','DataController@storepmeac');
Route::post('/dashboard/PAMEKASAN/AC/update','DataController@updatepmeac');

Route::get('/dashboard/PAMEKASAN/GENERATOR',['as' => 'pme_generator', 'uses' =>'DataController@indexpmegenerator']);
Route::get('/dashboard/PAMEKASAN/GENERATOR/tambah','DataController@tambahpmegenerator');
Route::post('/dashboard/PAMEKASAN/GENERATOR/store','DataController@storepmegenerator');
Route::post('/dashboard/PAMEKASAN/GENERATOR/update','DataController@updatepmegenerator');

Route::get('/dashboard/PAMEKASAN/RECTIFIER',['as' => 'pme_rectifier', 'uses' =>'DataController@indexpmerectifier']);
Route::get('/dashboard/PAMEKASAN/RECTIFIER/tambah','DataController@tambahpmerectifier');
Route::post('/dashboard/PAMEKASAN/RECTIFIER/store','DataController@storepmerectifier');
Route::post('/dashboard/PAMEKASAN/RECTIFIER/update','DataController@updatepmerectifier');

Route::get('/dashboard/PAMEKASAN/BATTERE',['as' => 'pme_battere', 'uses' =>'DataController@indexpmebattere']);
Route::get('/dashboard/PAMEKASAN/BATTERE/tambah','DataController@tambahpmebattere');
Route::post('/dashboard/PAMEKASAN/BATTERE/store','DataController@storepmebattere');
Route::post('/dashboard/PAMEKASAN/BATTERE/update','DataController@updatepmebattere');

// ==========PRAGAAN==========
Route::get('/dashboard/PRAGAAN/PLN',['as' => 'prg_pln', 'uses' =>'DataController@indexprgpln']);
Route::get('/dashboard/PRAGAAN/PLN/tambah','DataController@tambahprgpln');
Route::post('/dashboard/PRAGAAN/PLN/store','DataController@storeprgpln');
Route::post('/dashboard/PRAGAAN/PLN/update','DataController@updateprgpln');

Route::get('/dashboard/PRAGAAN/AC',['as' => 'prg_ac', 'uses' =>'DataController@indexprgac']);
Route::get('/dashboard/PRAGAAN/AC/tambah','DataController@tambahprgac');
Route::post('/dashboard/PRAGAAN/AC/store','DataController@storeprgac');
Route::post('/dashboard/PRAGAAN/AC/update','DataController@updateprgac');

Route::get('/dashboard/PRAGAAN/GENERATOR',['as' => 'prg_generator', 'uses' =>'DataController@indexprggenerator']);
Route::get('/dashboard/PRAGAAN/GENERATOR/tambah','DataController@tambahprggenerator');
Route::post('/dashboard/PRAGAAN/GENERATOR/store','DataController@storeprggenerator');
Route::post('/dashboard/PRAGAAN/GENERATOR/update','DataController@updateprggenerator');

Route::get('/dashboard/PRAGAAN/RECTIFIER',['as' => 'prg_rectifier', 'uses' =>'DataController@indexprgrectifier']);
Route::get('/dashboard/PRAGAAN/RECTIFIER/tambah','DataController@tambahprgrectifier');
Route::post('/dashboard/PRAGAAN/RECTIFIER/store','DataController@storeprgrectifier');
Route::post('/dashboard/PRAGAAN/RECTIFIER/update','DataController@updateprgrectifier');

Route::get('/dashboard/PRAGAAN/BATTERE',['as' => 'prg_battere', 'uses' =>'DataController@indexprgbattere']);
Route::get('/dashboard/PRAGAAN/BATTERE/tambah','DataController@tambahprgbattere');
Route::post('/dashboard/PRAGAAN/BATTERE/store','DataController@storeprgbattere');
Route::post('/dashboard/PRAGAAN/BATTERE/update','DataController@updateprgbattere');

// ==========SUMENEP==========
Route::get('/dashboard/SUMENEP/PLN',['as' => 'smp_pln', 'uses' =>'DataController@indexsmppln']);
Route::get('/dashboard/SUMENEP/PLN/tambah','DataController@tambahsmppln');
Route::post('/dashboard/SUMENEP/PLN/store','DataController@storesmppln');
Route::post('/dashboard/SUMENEP/PLN/update','DataController@updatesmppln');

Route::get('/dashboard/SUMENEP/AC',['as' => 'smp_ac', 'uses' =>'DataController@indexsmpac']);
Route::get('/dashboard/SUMENEP/AC/tambah','DataController@tambahsmpac');
Route::post('/dashboard/SUMENEP/AC/store','DataController@storesmpac');
Route::post('/dashboard/SUMENEP/AC/update','DataController@updatesmpac');

Route::get('/dashboard/SUMENEP/GENERATOR',['as' => 'smp_generator', 'uses' =>'DataController@indexsmpgenerator']);
Route::get('/dashboard/SUMENEP/GENERATOR/tambah','DataController@tambahsmpgenerator');
Route::post('/dashboard/SUMENEP/GENERATOR/store','DataController@storesmpgenerator');
Route::post('/dashboard/SUMENEP/GENERATOR/update','DataController@updatesmpgenerator');

Route::get('/dashboard/SUMENEP/RECTIFIER',['as' => 'smp_rectifier', 'uses' =>'DataController@indexsmprectifier']);
Route::get('/dashboard/SUMENEP/RECTIFIER/tambah','DataController@tambahsmprectifier');
Route::post('/dashboard/SUMENEP/RECTIFIER/store','DataController@storesmprectifier');
Route::post('/dashboard/SUMENEP/RECTIFIER/update','DataController@updatesmprectifier');

Route::get('/dashboard/SUMENEP/BATTERE',['as' => 'smp_battere', 'uses' =>'DataController@indexsmpbattere']);
Route::get('/dashboard/SUMENEP/BATTERE/tambah','DataController@tambahsmpbattere');
Route::post('/dashboard/SUMENEP/BATTERE/store','DataController@storesmpbattere');
Route::post('/dashboard/SUMENEP/BATTERE/update','DataController@updatesmpbattere');

// ==========SAPUDI PM==========
Route::get('/dashboard/SAPUDI PM/PLN',['as' => 'spd_pln', 'uses' =>'DataController@indexspdpln']);
Route::get('/dashboard/SAPUDI PM/PLN/tambah','DataController@tambahspdpln');
Route::post('/dashboard/SAPUDI PM/PLN/store','DataController@storespdpln');
Route::post('/dashboard/SAPUDI PM/PLN/update','DataController@updatespdpln');

Route::get('/dashboard/SAPUDI PM/AC',['as' => 'spd_ac', 'uses' =>'DataController@indexspdac']);
Route::get('/dashboard/SAPUDI PM/AC/tambah','DataController@tambahspdac');
Route::post('/dashboard/SAPUDI PM/AC/store','DataController@storespdac');
Route::post('/dashboard/SAPUDI PM/AC/update','DataController@updatespdac');

Route::get('/dashboard/SAPUDI PM/GENERATOR',['as' => 'spd_generator', 'uses' =>'DataController@indexspdgenerator']);
Route::get('/dashboard/SAPUDI PM/GENERATOR/tambah','DataController@tambahspdgenerator');
Route::post('/dashboard/SAPUDI PM/GENERATOR/store','DataController@storespdgenerator');
Route::post('/dashboard/SAPUDI PM/GENERATOR/update','DataController@updatespdgenerator');

Route::get('/dashboard/SAPUDI PM/RECTIFIER',['as' => 'spd_rectifier', 'uses' =>'DataController@indexspdrectifier']);
Route::get('/dashboard/SAPUDI PM/RECTIFIER/tambah','DataController@tambahspdrectifier');
Route::post('/dashboard/SAPUDI PM/RECTIFIER/store','DataController@storespdrectifier');
Route::post('/dashboard/SAPUDI PM/RECTIFIER/update','DataController@updatespdrectifier');

Route::get('/dashboard/SAPUDI PM/BATTERE',['as' => 'spd_battere', 'uses' =>'DataController@indexspdbattere']);
Route::get('/dashboard/SAPUDI PM/BATTERE/tambah','DataController@tambahspdbattere');
Route::post('/dashboard/SAPUDI PM/BATTERE/store','DataController@storespdbattere');
Route::post('/dashboard/SAPUDI PM/BATTERE/update','DataController@updatespdbattere');

// ==========SAMPANG==========
Route::get('/dashboard/SAMPANG/PLN',['as' => 'spg_pln', 'uses' =>'DataController@indexspgpln']);
Route::get('/dashboard/SAMPANG/PLN/tambah','DataController@tambahspgpln');
Route::post('/dashboard/SAMPANG/PLN/store','DataController@storespgpln');
Route::post('/dashboard/SAMPANG/PLN/update','DataController@updatespgpln');

Route::get('/dashboard/SAMPANG/AC',['as' => 'spg_ac', 'uses' =>'DataController@indexspgac']);
Route::get('/dashboard/SAMPANG/AC/tambah','DataController@tambahspgac');
Route::post('/dashboard/SAMPANG/AC/store','DataController@storespgac');
Route::post('/dashboard/SAMPANG/AC/update','DataController@updatespgac');

Route::get('/dashboard/SAMPANG/GENERATOR',['as' => 'spg_generator', 'uses' =>'DataController@indexspggenerator']);
Route::get('/dashboard/SAMPANG/GENERATOR/tambah','DataController@tambahspggenerator');
Route::post('/dashboard/SAMPANG/GENERATOR/store','DataController@storespggenerator');
Route::post('/dashboard/SAMPANG/GENERATOR/update','DataController@updatespggenerator');

Route::get('/dashboard/SAMPANG/RECTIFIER',['as' => 'spg_rectifier', 'uses' =>'DataController@indexspgrectifier']);
Route::get('/dashboard/SAMPANG/RECTIFIER/tambah','DataController@tambahspgrectifier');
Route::post('/dashboard/SAMPANG/RECTIFIER/store','DataController@storespgrectifier');
Route::post('/dashboard/SAMPANG/RECTIFIER/update','DataController@updatespgrectifier');

Route::get('/dashboard/SAMPANG/BATTERE',['as' => 'spg_battere', 'uses' =>'DataController@indexspgbattere']);
Route::get('/dashboard/SAMPANG/BATTERE/tambah','DataController@tambahspgbattere');
Route::post('/dashboard/SAMPANG/BATTERE/store','DataController@storespgbattere');
Route::post('/dashboard/SAMPANG/BATTERE/update','DataController@updatespgbattere');

// ==========SAPEKEN PM==========
Route::get('/dashboard/SAPEKEN PM/PLN',['as' => 'spk_pln', 'uses' =>'DataController@indexspkpln']);
Route::get('/dashboard/SAPEKEN PM/PLN/tambah','DataController@tambahspkpln');
Route::post('/dashboard/SAPEKEN PM/PLN/store','DataController@storespkpln');
Route::post('/dashboard/SAPEKEN PM/PLN/update','DataController@updatespkpln');

Route::get('/dashboard/SAPEKEN PM/AC',['as' => 'spk_ac', 'uses' =>'DataController@indexspkac']);
Route::get('/dashboard/SAPEKEN PM/AC/tambah','DataController@tambahspkac');
Route::post('/dashboard/SAPEKEN PM/AC/store','DataController@storespkac');
Route::post('/dashboard/SAPEKEN PM/AC/update','DataController@updatespkac');

Route::get('/dashboard/SAPEKEN PM/GENERATOR',['as' => 'spk_generator', 'uses' =>'DataController@indexspkgenerator']);
Route::get('/dashboard/SAPEKEN PM/GENERATOR/tambah','DataController@tambahspkgenerator');
Route::post('/dashboard/SAPEKEN PM/GENERATOR/store','DataController@storespkgenerator');
Route::post('/dashboard/SAPEKEN PM/GENERATOR/update','DataController@updatespkgenerator');

Route::get('/dashboard/SAPEKEN PM/RECTIFIER',['as' => 'spk_rectifier', 'uses' =>'DataController@indexspkrectifier']);
Route::get('/dashboard/SAPEKEN PM/RECTIFIER/tambah','DataController@tambahspkrectifier');
Route::post('/dashboard/SAPEKEN PM/RECTIFIER/store','DataController@storespkrectifier');
Route::post('/dashboard/SAPEKEN PM/RECTIFIER/update','DataController@updatespkrectifier');

Route::get('/dashboard/SAPEKEN PM/BATTERE',['as' => 'spk_battere', 'uses' =>'DataController@indexspkbattere']);
Route::get('/dashboard/SAPEKEN PM/BATTERE/tambah','DataController@tambahspkbattere');
Route::post('/dashboard/SAPEKEN PM/BATTERE/store','DataController@storespkbattere');
Route::post('/dashboard/SAPEKEN PM/BATTERE/update','DataController@updatespkbattere');

// ==========TANJUNG BUMI==========
Route::get('/dashboard/TANJUNG BUMI/PLN',['as' => 'tbu_pln', 'uses' =>'DataController@indextbupln']);
Route::get('/dashboard/TANJUNG BUMI/PLN/tambah','DataController@tambahtbupln');
Route::post('/dashboard/TANJUNG BUMI/PLN/store','DataController@storetbupln');
Route::post('/dashboard/TANJUNG BUMI/PLN/update','DataController@updatetbupln');

Route::get('/dashboard/TANJUNG BUMI/AC',['as' => 'tbu_ac', 'uses' =>'DataController@indextbuac']);
Route::get('/dashboard/TANJUNG BUMI/AC/tambah','DataController@tambahtbuac');
Route::post('/dashboard/TANJUNG BUMI/AC/store','DataController@storetbuac');
Route::post('/dashboard/TANJUNG BUMI/AC/update','DataController@updatetbuac');

Route::get('/dashboard/TANJUNG BUMI/GENERATOR',['as' => 'tbu_generator', 'uses' =>'DataController@indextbugenerator']);
Route::get('/dashboard/TANJUNG BUMI/GENERATOR/tambah','DataController@tambahtbugenerator');
Route::post('/dashboard/TANJUNG BUMI/GENERATOR/store','DataController@storetbugenerator');
Route::post('/dashboard/TANJUNG BUMI/GENERATOR/update','DataController@updatetbugenerator');

Route::get('/dashboard/TANJUNG BUMI/RECTIFIER',['as' => 'tbu_rectifier', 'uses' =>'DataController@indextburectifier']);
Route::get('/dashboard/TANJUNG BUMI/RECTIFIER/tambah','DataController@tambahtburectifier');
Route::post('/dashboard/TANJUNG BUMI/RECTIFIER/store','DataController@storetburectifier');
Route::post('/dashboard/TANJUNG BUMI/RECTIFIER/update','DataController@updatetburectifier');

Route::get('/dashboard/TANJUNG BUMI/BATTERE',['as' => 'tbu_battere', 'uses' =>'DataController@indextbubattere']);
Route::get('/dashboard/TANJUNG BUMI/BATTERE/tambah','DataController@tambahtbubattere');
Route::post('/dashboard/TANJUNG BUMI/BATTERE/store','DataController@storetbubattere');
Route::post('/dashboard/TANJUNG BUMI/BATTERE/update','DataController@updatetbubattere');

// ==========WARU3==========
Route::get('/dashboard/WARU3/PLN',['as' => 'wrp_pln', 'uses' =>'DataController@indexwrppln']);
Route::get('/dashboard/WARU3/PLN/tambah','DataController@tambahwrppln');
Route::post('/dashboard/WARU3/PLN/store','DataController@storewrppln');
Route::post('/dashboard/WARU3/PLN/update','DataController@updatewrppln');

Route::get('/dashboard/WARU3/AC',['as' => 'wrp_ac', 'uses' =>'DataController@indexwrpac']);
Route::get('/dashboard/WARU3/AC/tambah','DataController@tambahwrpac');
Route::post('/dashboard/WARU3/AC/store','DataController@storewrpac');
Route::post('/dashboard/WARU3/AC/update','DataController@updatewrpac');

Route::get('/dashboard/WARU3/GENERATOR',['as' => 'wrp_generator', 'uses' =>'DataController@indexwrpgenerator']);
Route::get('/dashboard/WARU3/GENERATOR/tambah','DataController@tambahwrpgenerator');
Route::post('/dashboard/WARU3/GENERATOR/store','DataController@storewrpgenerator');
Route::post('/dashboard/WARU3/GENERATOR/update','DataController@updatewrpgenerator');

Route::get('/dashboard/WARU3/RECTIFIER',['as' => 'wrp_rectifier', 'uses' =>'DataController@indexwrprectifier']);
Route::get('/dashboard/WARU3/RECTIFIER/tambah','DataController@tambahwrprectifier');
Route::post('/dashboard/WARU3/RECTIFIER/store','DataController@storewrprectifier');
Route::post('/dashboard/WARU3/RECTIFIER/update','DataController@updatewrprectifier');

Route::get('/dashboard/WARU3/BATTERE',['as' => 'wrp_battere', 'uses' =>'DataController@indexwrpbattere']);
Route::get('/dashboard/WARU3/BATTERE/tambah','DataController@tambahwrpbattere');
Route::post('/dashboard/WARU3/BATTERE/store','DataController@storewrpbattere');
Route::post('/dashboard/WARU3/BATTERE/update','DataController@updatewrpbattere');

//=========================================================== BILAL =============================================================//

Route::get('/dashboard/AMPEL GADING/PLN',['as' => 'apg_pln', 'uses' =>'DataController@indexapgpln']);
Route::get('/dashboard/AMPEL GADING/PLN/tambah','DataController@tambahapgpln');
Route::post('/dashboard/AMPEL GADING/PLN/store','DataController@storeapgpln');
Route::post('/dashboard/AMPEL GADING/PLN/update','DataController@updateapgpln');

Route::get('/dashboard/AMPEL GADING/AC',['as' => 'apg_ac', 'uses' =>'DataController@indexapgac']);
Route::get('/dashboard/AMPEL GADING/AC/tambah','DataController@tambahapgac');
Route::post('/dashboard/AMPEL GADING/AC/store','DataController@storeapgac');
Route::post('/dashboard/AMPEL GADING/AC/update','DataController@updateapgac');

Route::get('/dashboard/AMPEL GADING/GENERATOR',['as' => 'apg_generator', 'uses' =>'DataController@indexapggenerator']);
Route::get('/dashboard/AMPEL GADING/GENERATOR/tambah','DataController@tambahapggenerator');
Route::post('/dashboard/AMPEL GADING/GENERATOR/store','DataController@storeapggenerator');
Route::post('/dashboard/AMPEL GADING/GENERATOR/update','DataController@updateapggenerator');

Route::get('/dashboard/AMPEL GADING/RECTIFIER',['as' => 'apg_rectifier', 'uses' =>'DataController@indexapgrectifier']);
Route::get('/dashboard/AMPEL GADING/RECTIFIER/tambah','DataController@tambahapgrectifier');
Route::post('/dashboard/AMPEL GADING/RECTIFIER/store','DataController@storeapgrectifier');
Route::post('/dashboard/AMPEL GADING/RECTIFIER/update','DataController@updateapgrectifier');

Route::get('/dashboard/AMPEL GADING/BATTERE',['as' => 'apg_battere', 'uses' =>'DataController@indexapgbattere']);
Route::get('/dashboard/AMPEL GADING/BATTERE/tambah','DataController@tambahapgbattere');
Route::post('/dashboard/AMPEL GADING/BATTERE/store','DataController@storeapgbattere');
Route::post('/dashboard/AMPEL GADING/BATTERE/update','DataController@updateapgbattere');

//
Route::get('/dashboard/BLIMBING/PLN',['as' => 'blb_pln', 'uses' =>'DataController@indexblbpln']);
Route::get('/dashboard/BLIMBING/PLN/tambah','DataController@tambahblbpln');
Route::post('/dashboard/BLIMBING/PLN/store','DataController@storeblbpln');
Route::post('/dashboard/BLIMBING/PLN/update','DataController@updateblbpln');

Route::get('/dashboard/BLIMBING/AC',['as' => 'blb_ac', 'uses' =>'DataController@indexblbac']);
Route::get('/dashboard/BLIMBING/AC/tambah','DataController@tambahblbac');
Route::post('/dashboard/BLIMBING/AC/store','DataController@storeblbac');
Route::post('/dashboard/BLIMBING/AC/update','DataController@updateblbac');

Route::get('/dashboard/BLIMBING/GENERATOR',['as' => 'blb_generator', 'uses' =>'DataController@indexblbgenerator']);
Route::get('/dashboard/BLIMBING/GENERATOR/tambah','DataController@tambahblbgenerator');
Route::post('/dashboard/BLIMBING/GENERATOR/store','DataController@storeblbgenerator');
Route::post('/dashboard/BLIMBING/GENERATOR/update','DataController@updateblbgenerator');

Route::get('/dashboard/BLIMBING/RECTIFIER',['as' => 'blb_rectifier', 'uses' =>'DataController@indexblbrectifier']);
Route::get('/dashboard/BLIMBING/RECTIFIER/tambah','DataController@tambahblbrectifier');
Route::post('/dashboard/BLIMBING/RECTIFIER/store','DataController@storeblbrectifier');
Route::post('/dashboard/BLIMBING/RECTIFIER/update','DataController@updateblbrectifier');

Route::get('/dashboard/BLIMBING/BATTERE',['as' => 'blb_battere', 'uses' =>'DataController@indexblbbattere']);
Route::get('/dashboard/BLIMBING/BATTERE/tambah','DataController@tambahblbbattere');
Route::post('/dashboard/BLIMBING/BATTERE/store','DataController@storeblbbattere');
Route::post('/dashboard/BLIMBING/BATTERE/update','DataController@updateblbbattere');

//

Route::get('/dashboard/BANTUR/PLN',['as' => 'bnr_pln', 'uses' =>'DataController@indexbnrpln']);
Route::get('/dashboard/BANTUR/PLN/tambah','DataController@tambahbnrpln');
Route::post('/dashboard/BANTUR/PLN/store','DataController@storebnrpln');
Route::post('/dashboard/BANTUR/PLN/update','DataController@updatebnrpln');

Route::get('/dashboard/BANTUR/AC',['as' => 'bnr_ac', 'uses' =>'DataController@indexbnrac']);
Route::get('/dashboard/BANTUR/AC/tambah','DataController@tambahbnrac');
Route::post('/dashboard/BANTUR/AC/store','DataController@storebnrac');
Route::post('/dashboard/BANTUR/AC/update','DataController@updatebnrac');

Route::get('/dashboard/BANTUR/GENERATOR',['as' => 'bnr_generator', 'uses' =>'DataController@indexbnrgenerator']);
Route::get('/dashboard/BANTUR/GENERATOR/tambah','DataController@tambahbnrgenerator');
Route::post('/dashboard/BANTUR/GENERATOR/store','DataController@storebnrgenerator');
Route::post('/dashboard/BANTUR/GENERATOR/update','DataController@updatebnrgenerator');

Route::get('/dashboard/BANTUR/RECTIFIER',['as' => 'bnr_rectifier', 'uses' =>'DataController@indexbnrrectifier']);
Route::get('/dashboard/BANTUR/RECTIFIER/tambah','DataController@tambahbnrrectifier');
Route::post('/dashboard/BANTUR/RECTIFIER/store','DataController@storebnrrectifier');
Route::post('/dashboard/BANTUR/RECTIFIER/update','DataController@updatebnrrectifier');

Route::get('/dashboard/BANTUR/BATTERE',['as' => 'bnr_battere', 'uses' =>'DataController@indexbnrbattere']);
Route::get('/dashboard/BANTUR/BATTERE/tambah','DataController@tambahbnrbattere');
Route::post('/dashboard/BANTUR/BATTERE/store','DataController@storebnrbattere');
Route::post('/dashboard/BANTUR/BATTERE/update','DataController@updatebnrbattere');

//

Route::get('/dashboard/BURING/PLN',['as' => 'brg_pln', 'uses' =>'DataController@indexbrgpln']);
Route::get('/dashboard/BURING/PLN/tambah','DataController@tambahbrgpln');
Route::post('/dashboard/BURING/PLN/store','DataController@storebrgpln');
Route::post('/dashboard/BURING/PLN/update','DataController@updatebrgpln');

Route::get('/dashboard/BURING/AC',['as' => 'brg_ac', 'uses' =>'DataController@indexbrgac']);
Route::get('/dashboard/BURING/AC/tambah','DataController@tambahbrgac');
Route::post('/dashboard/BURING/AC/store','DataController@storebrgac');
Route::post('/dashboard/BURING/AC/update','DataController@updatebrgac');

Route::get('/dashboard/BURING/GENERATOR',['as' => 'brg_generator', 'uses' =>'DataController@indexbrggenerator']);
Route::get('/dashboard/BURING/GENERATOR/tambah','DataController@tambahbrggenerator');
Route::post('/dashboard/BURING/GENERATOR/store','DataController@storebrggenerator');
Route::post('/dashboard/BURING/GENERATOR/update','DataController@updatebrggenerator');

Route::get('/dashboard/BURING/RECTIFIER',['as' => 'brg_rectifier', 'uses' =>'DataController@indexbrgrectifier']);
Route::get('/dashboard/BURING/RECTIFIER/tambah','DataController@tambahbrgrectifier');
Route::post('/dashboard/BURING/RECTIFIER/store','DataController@storebrgrectifier');
Route::post('/dashboard/BURING/RECTIFIER/update','DataController@updatebrgrectifier');

Route::get('/dashboard/BURING/BATTERE',['as' => 'brg_battere', 'uses' =>'DataController@indexbrgbattere']);
Route::get('/dashboard/BURING/BATTERE/tambah','DataController@tambahbrgbattere');
Route::post('/dashboard/BURING/BATTERE/store','DataController@storebrgbattere');
Route::post('/dashboard/BURING/BATTERE/update','DataController@updatebrgbattere');

//

Route::get('/dashboard/BATU/PLN',['as' => 'btu_pln', 'uses' =>'DataController@indexbtupln']);
Route::get('/dashboard/BATU/PLN/tambah','DataController@tambahbtupln');
Route::post('/dashboard/BATU/PLN/store','DataController@storebtupln');
Route::post('/dashboard/BATU/PLN/update','DataController@updatebtupln');

Route::get('/dashboard/BATU/AC',['as' => 'btu_ac', 'uses' =>'DataController@indexbtuac']);
Route::get('/dashboard/BATU/AC/tambah','DataController@tambahbtuac');
Route::post('/dashboard/BATU/AC/store','DataController@storebtuac');
Route::post('/dashboard/BATU/AC/update','DataController@updatebtuac');

Route::get('/dashboard/BATU/GENERATOR',['as' => 'btu_generator', 'uses' =>'DataController@indexbtugenerator']);
Route::get('/dashboard/BATU/GENERATOR/tambah','DataController@tambahbtugenerator');
Route::post('/dashboard/BATU/GENERATOR/store','DataController@storebtugenerator');
Route::post('/dashboard/BATU/GENERATOR/update','DataController@updatebtugenerator');

Route::get('/dashboard/BATU/RECTIFIER',['as' => 'btu_rectifier', 'uses' =>'DataController@indexbturectifier']);
Route::get('/dashboard/BATU/RECTIFIER/tambah','DataController@tambahbturectifier');
Route::post('/dashboard/BATU/RECTIFIER/store','DataController@storebturectifier');
Route::post('/dashboard/BATU/RECTIFIER/update','DataController@updatebturectifier');

Route::get('/dashboard/BATU/BATTERE',['as' => 'btu_battere', 'uses' =>'DataController@indexbtubattere']);
Route::get('/dashboard/BATU/BATTERE/tambah','DataController@tambahbtubattere');
Route::post('/dashboard/BATU/BATTERE/store','DataController@storebtubattere');
Route::post('/dashboard/BATU/BATTERE/update','DataController@updatebtubattere');

//

Route::get('/dashboard/DONOMULYO/PLN',['as' => 'dno_pln', 'uses' =>'DataController@indexdnopln']);
Route::get('/dashboard/DONOMULYO/PLN/tambah','DataController@tambahdnopln');
Route::post('/dashboard/DONOMULYO/PLN/store','DataController@storednopln');
Route::post('/dashboard/DONOMULYO/PLN/update','DataController@updatednopln');

Route::get('/dashboard/DONOMULYO/AC',['as' => 'dno_ac', 'uses' =>'DataController@indexdnoac']);
Route::get('/dashboard/DONOMULYO/AC/tambah','DataController@tambahdnoac');
Route::post('/dashboard/DONOMULYO/AC/store','DataController@storednoac');
Route::post('/dashboard/DONOMULYO/AC/update','DataController@updatednoac');

Route::get('/dashboard/DONOMULYO/GENERATOR',['as' => 'dno_generator', 'uses' =>'DataController@indexdnogenerator']);
Route::get('/dashboard/DONOMULYO/GENERATOR/tambah','DataController@tambahdnogenerator');
Route::post('/dashboard/DONOMULYO/GENERATOR/store','DataController@storednogenerator');
Route::post('/dashboard/DONOMULYO/GENERATOR/update','DataController@updatednogenerator');

Route::get('/dashboard/DONOMULYO/RECTIFIER',['as' => 'dno_rectifier', 'uses' =>'DataController@indexdnorectifier']);
Route::get('/dashboard/DONOMULYO/RECTIFIER/tambah','DataController@tambahdnorectifier');
Route::post('/dashboard/DONOMULYO/RECTIFIER/store','DataController@storednorectifier');
Route::post('/dashboard/DONOMULYO/RECTIFIER/update','DataController@updatednorectifier');

Route::get('/dashboard/DONOMULYO/BATTERE',['as' => 'dno_battere', 'uses' =>'DataController@indexdnobattere']);
Route::get('/dashboard/DONOMULYO/BATTERE/tambah','DataController@tambahdnobattere');
Route::post('/dashboard/DONOMULYO/BATTERE/store','DataController@storednobattere');
Route::post('/dashboard/DONOMULYO/BATTERE/update','DataController@updatednobattere');

//

Route::get('/dashboard/DAMPIT/PLN',['as' => 'dpt_pln', 'uses' =>'DataController@indexdptpln']);
Route::get('/dashboard/DAMPIT/PLN/tambah','DataController@tambahdptpln');
Route::post('/dashboard/DAMPIT/PLN/store','DataController@storedptpln');
Route::post('/dashboard/DAMPIT/PLN/update','DataController@updatedptpln');

Route::get('/dashboard/DAMPIT/AC',['as' => 'dpt_ac', 'uses' =>'DataController@indexdptac']);
Route::get('/dashboard/DAMPIT/AC/tambah','DataController@tambahdptac');
Route::post('/dashboard/DAMPIT/AC/store','DataController@storedptac');
Route::post('/dashboard/DAMPIT/AC/update','DataController@updatedptac');

Route::get('/dashboard/DAMPIT/GENERATOR',['as' => 'dpt_generator', 'uses' =>'DataController@indexdptgenerator']);
Route::get('/dashboard/DAMPIT/GENERATOR/tambah','DataController@tambahdptgenerator');
Route::post('/dashboard/DAMPIT/GENERATOR/store','DataController@storedptgenerator');
Route::post('/dashboard/DAMPIT/GENERATOR/update','DataController@updatedptgenerator');

Route::get('/dashboard/DAMPIT/RECTIFIER',['as' => 'dpt_rectifier', 'uses' =>'DataController@indexdptrectifier']);
Route::get('/dashboard/DAMPIT/RECTIFIER/tambah','DataController@tambahdptrectifier');
Route::post('/dashboard/DAMPIT/RECTIFIER/store','DataController@storedptrectifier');
Route::post('/dashboard/DAMPIT/RECTIFIER/update','DataController@updatedptrectifier');

Route::get('/dashboard/DAMPIT/BATTERE',['as' => 'dpt_battere', 'uses' =>'DataController@indexdptbattere']);
Route::get('/dashboard/DAMPIT/BATTERE/tambah','DataController@tambahdptbattere');
Route::post('/dashboard/DAMPIT/BATTERE/store','DataController@storedptbattere');
Route::post('/dashboard/DAMPIT/BATTERE/update','DataController@updatedptbattere');

//

Route::get('/dashboard/GADANG/PLN',['as' => 'gdg_pln', 'uses' =>'DataController@indexgdgpln']);
Route::get('/dashboard/GADANG/PLN/tambah','DataController@tambahgdgpln');
Route::post('/dashboard/GADANG/PLN/store','DataController@storegdgpln');
Route::post('/dashboard/GADANG/PLN/update','DataController@updategdgpln');

Route::get('/dashboard/GADANG/AC',['as' => 'gdg_ac', 'uses' =>'DataController@indexgdgac']);
Route::get('/dashboard/GADANG/AC/tambah','DataController@tambahgdgac');
Route::post('/dashboard/GADANG/AC/store','DataController@storegdgac');
Route::post('/dashboard/GADANG/AC/update','DataController@updategdgac');

Route::get('/dashboard/GADANG/GENERATOR',['as' => 'gdg_generator', 'uses' =>'DataController@indexgdggenerator']);
Route::get('/dashboard/GADANG/GENERATOR/tambah','DataController@tambahgdggenerator');
Route::post('/dashboard/GADANG/GENERATOR/store','DataController@storegdggenerator');
Route::post('/dashboard/GADANG/GENERATOR/update','DataController@updategdggenerator');

Route::get('/dashboard/GADANG/RECTIFIER',['as' => 'gdg_rectifier', 'uses' =>'DataController@indexgdgrectifier']);
Route::get('/dashboard/GADANG/RECTIFIER/tambah','DataController@tambahgdgrectifier');
Route::post('/dashboard/GADANG/RECTIFIER/store','DataController@storegdgrectifier');
Route::post('/dashboard/GADANG/RECTIFIER/update','DataController@updategdgrectifier');

Route::get('/dashboard/GADANG/BATTERE',['as' => 'gdg_battere', 'uses' =>'DataController@indexgdgbattere']);
Route::get('/dashboard/GADANG/BATTERE/tambah','DataController@tambahgdgbattere');
Route::post('/dashboard/GADANG/BATTERE/store','DataController@storegdgbattere');
Route::post('/dashboard/GADANG/BATTERE/update','DataController@updategdgbattere');

//

Route::get('/dashboard/GONDANGLEGI/PLN',['as' => 'gdi_pln', 'uses' =>'DataController@indexgdipln']);
Route::get('/dashboard/GONDANGLEGI/PLN/tambah','DataController@tambahgdipln');
Route::post('/dashboard/GONDANGLEGI/PLN/store','DataController@storegdipln');
Route::post('/dashboard/GONDANGLEGI/PLN/update','DataController@updategdipln');

Route::get('/dashboard/GONDANGLEGI/AC',['as' => 'gdi_ac', 'uses' =>'DataController@indexgdiac']);
Route::get('/dashboard/GONDANGLEGI/AC/tambah','DataController@tambahgdiac');
Route::post('/dashboard/GONDANGLEGI/AC/store','DataController@storegdiac');
Route::post('/dashboard/GONDANGLEGI/AC/update','DataController@updategdiac');

Route::get('/dashboard/GONDANGLEGI/GENERATOR',['as' => 'gdi_generator', 'uses' =>'DataController@indexgdigenerator']);
Route::get('/dashboard/GONDANGLEGI/GENERATOR/tambah','DataController@tambahgdigenerator');
Route::post('/dashboard/GONDANGLEGI/GENERATOR/store','DataController@storegdigenerator');
Route::post('/dashboard/GONDANGLEGI/GENERATOR/update','DataController@updategdigenerator');

Route::get('/dashboard/GONDANGLEGI/RECTIFIER',['as' => 'gdi_rectifier', 'uses' =>'DataController@indexgdirectifier']);
Route::get('/dashboard/GONDANGLEGI/RECTIFIER/tambah','DataController@tambahgdirectifier');
Route::post('/dashboard/GONDANGLEGI/RECTIFIER/store','DataController@storegdirectifier');
Route::post('/dashboard/GONDANGLEGI/RECTIFIER/update','DataController@updategdirectifier');

Route::get('/dashboard/GONDANGLEGI/BATTERE',['as' => 'gdi_battere', 'uses' =>'DataController@indexgdibattere']);
Route::get('/dashboard/GONDANGLEGI/BATTERE/tambah','DataController@tambahgdibattere');
Route::post('/dashboard/GONDANGLEGI/BATTERE/store','DataController@storegdibattere');
Route::post('/dashboard/GONDANGLEGI/BATTERE/update','DataController@updategdibattere');

//

Route::get('/dashboard/GUNUNG KAWI/PLN',['as' => 'gkw_pln', 'uses' =>'DataController@indexgkwpln']);
Route::get('/dashboard/GUNUNG KAWI/PLN/tambah','DataController@tambahgkwpln');
Route::post('/dashboard/GUNUNG KAWI/PLN/store','DataController@storegkwpln');
Route::post('/dashboard/GUNUNG KAWI/PLN/update','DataController@updategkwpln');

Route::get('/dashboard/GUNUNG KAWI/AC',['as' => 'gkw_ac', 'uses' =>'DataController@indexgkwac']);
Route::get('/dashboard/GUNUNG KAWI/AC/tambah','DataController@tambahgkwac');
Route::post('/dashboard/GUNUNG KAWI/AC/store','DataController@storegkwac');
Route::post('/dashboard/GUNUNG KAWI/AC/update','DataController@updategkwac');

Route::get('/dashboard/GUNUNG KAWI/GENERATOR',['as' => 'gkw_generator', 'uses' =>'DataController@indexgkwgenerator']);
Route::get('/dashboard/GUNUNG KAWI/GENERATOR/tambah','DataController@tambahgkwgenerator');
Route::post('/dashboard/GUNUNG KAWI/GENERATOR/store','DataController@storegkwgenerator');
Route::post('/dashboard/GUNUNG KAWI/GENERATOR/update','DataController@updategkwgenerator');

Route::get('/dashboard/GUNUNG KAWI/RECTIFIER',['as' => 'gkw_rectifier', 'uses' =>'DataController@indexgkwrectifier']);
Route::get('/dashboard/GUNUNG KAWI/RECTIFIER/tambah','DataController@tambahgkwrectifier');
Route::post('/dashboard/GUNUNG KAWI/RECTIFIER/store','DataController@storegkwrectifier');
Route::post('/dashboard/GUNUNG KAWI/RECTIFIER/update','DataController@updategkwrectifier');

Route::get('/dashboard/GUNUNG KAWI/BATTERE',['as' => 'gkw_battere', 'uses' =>'DataController@indexgkwbattere']);
Route::get('/dashboard/GUNUNG KAWI/BATTERE/tambah','DataController@tambahgkwbattere');
Route::post('/dashboard/GUNUNG KAWI/BATTERE/store','DataController@storegkwbattere');
Route::post('/dashboard/GUNUNG KAWI/BATTERE/update','DataController@updategkwbattere');

//

Route::get('/dashboard/KEPANJEN/PLN',['as' => 'kep_pln', 'uses' =>'DataController@indexkeppln']);
Route::get('/dashboard/KEPANJEN/PLN/tambah','DataController@tambahkeppln');
Route::post('/dashboard/KEPANJEN/PLN/store','DataController@storekeppln');
Route::post('/dashboard/KEPANJEN/PLN/update','DataController@updatekeppln');

Route::get('/dashboard/KEPANJEN/AC',['as' => 'kep_ac', 'uses' =>'DataController@indexkepac']);
Route::get('/dashboard/KEPANJEN/AC/tambah','DataController@tambahkepac');
Route::post('/dashboard/KEPANJEN/AC/store','DataController@storekepac');
Route::post('/dashboard/KEPANJEN/AC/update','DataController@updatekepac');

Route::get('/dashboard/KEPANJEN/GENERATOR',['as' => 'kep_generator', 'uses' =>'DataController@indexkepgenerator']);
Route::get('/dashboard/KEPANJEN/GENERATOR/tambah','DataController@tambahkepgenerator');
Route::post('/dashboard/KEPANJEN/GENERATOR/store','DataController@storekepgenerator');
Route::post('/dashboard/KEPANJEN/GENERATOR/update','DataController@updatekepgenerator');

Route::get('/dashboard/KEPANJEN/RECTIFIER',['as' => 'kep_rectifier', 'uses' =>'DataController@indexkeprectifier']);
Route::get('/dashboard/KEPANJEN/RECTIFIER/tambah','DataController@tambahkeprectifier');
Route::post('/dashboard/KEPANJEN/RECTIFIER/store','DataController@storekeprectifier');
Route::post('/dashboard/KEPANJEN/RECTIFIER/update','DataController@updatekeprectifier');

Route::get('/dashboard/KEPANJEN/BATTERE',['as' => 'kep_battere', 'uses' =>'DataController@indexkepbattere']);
Route::get('/dashboard/KEPANJEN/BATTERE/tambah','DataController@tambahkepbattere');
Route::post('/dashboard/KEPANJEN/BATTERE/store','DataController@storekepbattere');
Route::post('/dashboard/KEPANJEN/BATTERE/update','DataController@updatekepbattere');

//

Route::get('/dashboard/KLOJEN/PLN',['as' => 'klj_pln', 'uses' =>'DataController@indexkljpln']);
Route::get('/dashboard/KLOJEN/PLN/tambah','DataController@tambahkljpln');
Route::post('/dashboard/KLOJEN/PLN/store','DataController@storekljpln');
Route::post('/dashboard/KLOJEN/PLN/update','DataController@updatekljpln');

Route::get('/dashboard/KLOJEN/AC',['as' => 'klj_ac', 'uses' =>'DataController@indexkljac']);
Route::get('/dashboard/KLOJEN/AC/tambah','DataController@tambahkljac');
Route::post('/dashboard/KLOJEN/AC/store','DataController@storekljac');
Route::post('/dashboard/KLOJEN/AC/update','DataController@updatekljac');

Route::get('/dashboard/KLOJEN/GENERATOR',['as' => 'klj_generator', 'uses' =>'DataController@indexkljgenerator']);
Route::get('/dashboard/KLOJEN/GENERATOR/tambah','DataController@tambahkljgenerator');
Route::post('/dashboard/KLOJEN/GENERATOR/store','DataController@storekljgenerator');
Route::post('/dashboard/KLOJEN/GENERATOR/update','DataController@updatekljgenerator');

Route::get('/dashboard/KLOJEN/RECTIFIER',['as' => 'klj_rectifier', 'uses' =>'DataController@indexkljrectifier']);
Route::get('/dashboard/KLOJEN/RECTIFIER/tambah','DataController@tambahkljrectifier');
Route::post('/dashboard/KLOJEN/RECTIFIER/store','DataController@storekljrectifier');
Route::post('/dashboard/KLOJEN/RECTIFIER/update','DataController@updatekljrectifier');

Route::get('/dashboard/KLOJEN/BATTERE',['as' => 'klj_battere', 'uses' =>'DataController@indexkljbattere']);
Route::get('/dashboard/KLOJEN/BATTERE/tambah','DataController@tambahkljbattere');
Route::post('/dashboard/KLOJEN/BATTERE/store','DataController@storekljbattere');
Route::post('/dashboard/KLOJEN/BATTERE/update','DataController@updatekljbattere');

//

Route::get('/dashboard/KARANG PLOSO/PLN',['as' => 'kpo_pln', 'uses' =>'DataController@indexkpopln']);
Route::get('/dashboard/KARANG PLOSO/PLN/tambah','DataController@tambahkpopln');
Route::post('/dashboard/KARANG PLOSO/PLN/store','DataController@storekpopln');
Route::post('/dashboard/KARANG PLOSO/PLN/update','DataController@updatekpopln');

Route::get('/dashboard/KARANG PLOSO/AC',['as' => 'kpo_ac', 'uses' =>'DataController@indexkpoac']);
Route::get('/dashboard/KARANG PLOSO/AC/tambah','DataController@tambahkpoac');
Route::post('/dashboard/KARANG PLOSO/AC/store','DataController@storekpoac');
Route::post('/dashboard/KARANG PLOSO/AC/update','DataController@updatekpoac');

Route::get('/dashboard/KARANG PLOSO/GENERATOR',['as' => 'kpo_generator', 'uses' =>'DataController@indexkpogenerator']);
Route::get('/dashboard/KARANG PLOSO/GENERATOR/tambah','DataController@tambahkpogenerator');
Route::post('/dashboard/KARANG PLOSO/GENERATOR/store','DataController@storekpogenerator');
Route::post('/dashboard/KARANG PLOSO/GENERATOR/update','DataController@updatekpogenerator');

Route::get('/dashboard/KARANG PLOSO/RECTIFIER',['as' => 'kpo_rectifier', 'uses' =>'DataController@indexkporectifier']);
Route::get('/dashboard/KARANG PLOSO/RECTIFIER/tambah','DataController@tambahkporectifier');
Route::post('/dashboard/KARANG PLOSO/RECTIFIER/store','DataController@storekporectifier');
Route::post('/dashboard/KARANG PLOSO/RECTIFIER/update','DataController@updatekporectifier');

Route::get('/dashboard/KARANG PLOSO/BATTERE',['as' => 'kpo_battere', 'uses' =>'DataController@indexkpobattere']);
Route::get('/dashboard/KARANG PLOSO/BATTERE/tambah','DataController@tambahkpobattere');
Route::post('/dashboard/KARANG PLOSO/BATTERE/store','DataController@storekpobattere');
Route::post('/dashboard/KARANG PLOSO/BATTERE/update','DataController@updatekpobattere');

//

Route::get('/dashboard/LAWANG/PLN',['as' => 'lwg_pln', 'uses' =>'DataController@indexlwgpln']);
Route::get('/dashboard/LAWANG/PLN/tambah','DataController@tambahlwgpln');
Route::post('/dashboard/LAWANG/PLN/store','DataController@storelwgpln');
Route::post('/dashboard/LAWANG/PLN/update','DataController@updatelwgpln');

Route::get('/dashboard/LAWANG/AC',['as' => 'lwg_ac', 'uses' =>'DataController@indexlwgac']);
Route::get('/dashboard/LAWANG/AC/tambah','DataController@tambahlwgac');
Route::post('/dashboard/LAWANG/AC/store','DataController@storelwgac');
Route::post('/dashboard/LAWANG/AC/update','DataController@updatelwgac');

Route::get('/dashboard/LAWANG/GENERATOR',['as' => 'lwg_generator', 'uses' =>'DataController@indexlwggenerator']);
Route::get('/dashboard/LAWANG/GENERATOR/tambah','DataController@tambahlwggenerator');
Route::post('/dashboard/LAWANG/GENERATOR/store','DataController@storelwggenerator');
Route::post('/dashboard/LAWANG/GENERATOR/update','DataController@updatelwggenerator');

Route::get('/dashboard/LAWANG/RECTIFIER',['as' => 'lwg_rectifier', 'uses' =>'DataController@indexlwgrectifier']);
Route::get('/dashboard/LAWANG/RECTIFIER/tambah','DataController@tambahlwgrectifier');
Route::post('/dashboard/LAWANG/RECTIFIER/store','DataController@storelwgrectifier');
Route::post('/dashboard/LAWANG/RECTIFIER/update','DataController@updatelwgrectifier');

Route::get('/dashboard/LAWANG/BATTERE',['as' => 'lwg_battere', 'uses' =>'DataController@indexlwgbattere']);
Route::get('/dashboard/LAWANG/BATTERE/tambah','DataController@tambahlwgbattere');
Route::post('/dashboard/LAWANG/BATTERE/store','DataController@storelwgbattere');
Route::post('/dashboard/LAWANG/BATTERE/update','DataController@updatelwgbattere');

//

Route::get('/dashboard/MALANG/PLN',['as' => 'mlg_pln', 'uses' =>'DataController@indexmlgpln']);
Route::get('/dashboard/MALANG/PLN/tambah','DataController@tambahmlgpln');
Route::post('/dashboard/MALANG/PLN/store','DataController@storemlgpln');
Route::post('/dashboard/MALANG/PLN/update','DataController@updatemlgpln');

Route::get('/dashboard/MALANG/AC',['as' => 'mlg_ac', 'uses' =>'DataController@indexmlgac']);
Route::get('/dashboard/MALANG/AC/tambah','DataController@tambahmlgac');
Route::post('/dashboard/MALANG/AC/store','DataController@storemlgac');
Route::post('/dashboard/MALANG/AC/update','DataController@updatemlgac');

Route::get('/dashboard/MALANG/GENERATOR',['as' => 'mlg_generator', 'uses' =>'DataController@indexmlggenerator']);
Route::get('/dashboard/MALANG/GENERATOR/tambah','DataController@tambahmlggenerator');
Route::post('/dashboard/MALANG/GENERATOR/store','DataController@storemlggenerator');
Route::post('/dashboard/MALANG/GENERATOR/update','DataController@updatemlggenerator');

Route::get('/dashboard/MALANG/RECTIFIER',['as' => 'mlg_rectifier', 'uses' =>'DataController@indexmlgrectifier']);
Route::get('/dashboard/MALANG/RECTIFIER/tambah','DataController@tambahmlgrectifier');
Route::post('/dashboard/MALANG/RECTIFIER/store','DataController@storemlgrectifier');
Route::post('/dashboard/MALANG/RECTIFIER/update','DataController@updatemlgrectifier');

Route::get('/dashboard/MALANG/BATTERE',['as' => 'mlg_battere', 'uses' =>'DataController@indexmlgbattere']);
Route::get('/dashboard/MALANG/BATTERE/tambah','DataController@tambahmlgbattere');
Route::post('/dashboard/MALANG/BATTERE/store','DataController@storemlgbattere');
Route::post('/dashboard/MALANG/BATTERE/update','DataController@updatemlgbattere');

//

Route::get('/dashboard/NGANTANG/PLN',['as' => 'ntg_pln', 'uses' =>'DataController@indexntgpln']);
Route::get('/dashboard/NGANTANG/PLN/tambah','DataController@tambahntgpln');
Route::post('/dashboard/NGANTANG/PLN/store','DataController@storentgpln');
Route::post('/dashboard/NGANTANG/PLN/update','DataController@updatentgpln');

Route::get('/dashboard/NGANTANG/AC',['as' => 'ntg_ac', 'uses' =>'DataController@indexntgac']);
Route::get('/dashboard/NGANTANG/AC/tambah','DataController@tambahntgac');
Route::post('/dashboard/NGANTANG/AC/store','DataController@storentgac');
Route::post('/dashboard/NGANTANG/AC/update','DataController@updatentgac');

Route::get('/dashboard/NGANTANG/GENERATOR',['as' => 'ntg_generator', 'uses' =>'DataController@indexntggenerator']);
Route::get('/dashboard/NGANTANG/GENERATOR/tambah','DataController@tambahntggenerator');
Route::post('/dashboard/NGANTANG/GENERATOR/store','DataController@storentggenerator');
Route::post('/dashboard/NGANTANG/GENERATOR/update','DataController@updatentggenerator');

Route::get('/dashboard/NGANTANG/RECTIFIER',['as' => 'ntg_rectifier', 'uses' =>'DataController@indexntgrectifier']);
Route::get('/dashboard/NGANTANG/RECTIFIER/tambah','DataController@tambahntgrectifier');
Route::post('/dashboard/NGANTANG/RECTIFIER/store','DataController@storentgrectifier');
Route::post('/dashboard/NGANTANG/RECTIFIER/update','DataController@updatentgrectifier');

Route::get('/dashboard/NGANTANG/BATTERE',['as' => 'ntg_battere', 'uses' =>'DataController@indexntgbattere']);
Route::get('/dashboard/NGANTANG/BATTERE/tambah','DataController@tambahntgbattere');
Route::post('/dashboard/NGANTANG/BATTERE/store','DataController@storentgbattere');
Route::post('/dashboard/NGANTANG/BATTERE/update','DataController@updatentgbattere');

//

Route::get('/dashboard/PAGAK/PLN',['as' => 'pgk_pln', 'uses' =>'DataController@indexpgkpln']);
Route::get('/dashboard/PAGAK/PLN/tambah','DataController@tambahpgkpln');
Route::post('/dashboard/PAGAK/PLN/store','DataController@storepgkpln');
Route::post('/dashboard/PAGAK/PLN/update','DataController@updatepgkpln');

Route::get('/dashboard/PAGAK/AC',['as' => 'pgk_ac', 'uses' =>'DataController@indexpgkac']);
Route::get('/dashboard/PAGAK/AC/tambah','DataController@tambahpgkac');
Route::post('/dashboard/PAGAK/AC/store','DataController@storepgkac');
Route::post('/dashboard/PAGAK/AC/update','DataController@updatepgkac');

Route::get('/dashboard/PAGAK/GENERATOR',['as' => 'pgk_generator', 'uses' =>'DataController@indexpgkgenerator']);
Route::get('/dashboard/PAGAK/GENERATOR/tambah','DataController@tambahpgkgenerator');
Route::post('/dashboard/PAGAK/GENERATOR/store','DataController@storepgkgenerator');
Route::post('/dashboard/PAGAK/GENERATOR/update','DataController@updatepgkgenerator');

Route::get('/dashboard/PAGAK/RECTIFIER',['as' => 'pgk_rectifier', 'uses' =>'DataController@indexpgkrectifier']);
Route::get('/dashboard/PAGAK/RECTIFIER/tambah','DataController@tambahpgkrectifier');
Route::post('/dashboard/PAGAK/RECTIFIER/store','DataController@storepgkrectifier');
Route::post('/dashboard/PAGAK/RECTIFIER/update','DataController@updatepgkrectifier');

Route::get('/dashboard/PAGAK/BATTERE',['as' => 'pgk_battere', 'uses' =>'DataController@indexpgkbattere']);
Route::get('/dashboard/PAGAK/BATTERE/tambah','DataController@tambahpgkbattere');
Route::post('/dashboard/PAGAK/BATTERE/store','DataController@storepgkbattere');
Route::post('/dashboard/PAGAK/BATTERE/update','DataController@updatepgkbattere');

//

Route::get('/dashboard/PAKIS/PLN',['as' => 'pks_pln', 'uses' =>'DataController@indexpkspln']);
Route::get('/dashboard/PAKIS/PLN/tambah','DataController@tambahpkspln');
Route::post('/dashboard/PAKIS/PLN/store','DataController@storepkspln');
Route::post('/dashboard/PAKIS/PLN/update','DataController@updatepkspln');

Route::get('/dashboard/PAKIS/AC',['as' => 'pks_ac', 'uses' =>'DataController@indexpksac']);
Route::get('/dashboard/PAKIS/AC/tambah','DataController@tambahpksac');
Route::post('/dashboard/PAKIS/AC/store','DataController@storepksac');
Route::post('/dashboard/PAKIS/AC/update','DataController@updatepksac');

Route::get('/dashboard/PAKIS/GENERATOR',['as' => 'pks_generator', 'uses' =>'DataController@indexpksgenerator']);
Route::get('/dashboard/PAKIS/GENERATOR/tambah','DataController@tambahpksgenerator');
Route::post('/dashboard/PAKIS/GENERATOR/store','DataController@storepksgenerator');
Route::post('/dashboard/PAKIS/GENERATOR/update','DataController@updatepksgenerator');

Route::get('/dashboard/PAKIS/RECTIFIER',['as' => 'pks_rectifier', 'uses' =>'DataController@indexpksrectifier']);
Route::get('/dashboard/PAKIS/RECTIFIER/tambah','DataController@tambahpksrectifier');
Route::post('/dashboard/PAKIS/RECTIFIER/store','DataController@storepksrectifier');
Route::post('/dashboard/PAKIS/RECTIFIER/update','DataController@updatepksrectifier');

Route::get('/dashboard/PAKIS/BATTERE',['as' => 'pks_battere', 'uses' =>'DataController@indexpksbattere']);
Route::get('/dashboard/PAKIS/BATTERE/tambah','DataController@tambahpksbattere');
Route::post('/dashboard/PAKIS/BATTERE/store','DataController@storepksbattere');
Route::post('/dashboard/PAKIS/BATTERE/update','DataController@updatepksbattere');

//

Route::get('/dashboard/SUMBERMANJING/PLN',['as' => 'sbm_pln', 'uses' =>'DataController@indexsbmpln']);
Route::get('/dashboard/SUMBERMANJING/PLN/tambah','DataController@tambahsbmpln');
Route::post('/dashboard/SUMBERMANJING/PLN/store','DataController@storesbmpln');
Route::post('/dashboard/SUMBERMANJING/PLN/update','DataController@updatesbmpln');

Route::get('/dashboard/SUMBERMANJING/AC',['as' => 'sbm_ac', 'uses' =>'DataController@indexsbmac']);
Route::get('/dashboard/SUMBERMANJING/AC/tambah','DataController@tambahsbmac');
Route::post('/dashboard/SUMBERMANJING/AC/store','DataController@storesbmac');
Route::post('/dashboard/SUMBERMANJING/AC/update','DataController@updatesbmac');

Route::get('/dashboard/SUMBERMANJING/GENERATOR',['as' => 'sbm_generator', 'uses' =>'DataController@indexsbmgenerator']);
Route::get('/dashboard/SUMBERMANJING/GENERATOR/tambah','DataController@tambahsbmgenerator');
Route::post('/dashboard/SUMBERMANJING/GENERATOR/store','DataController@storesbmgenerator');
Route::post('/dashboard/SUMBERMANJING/GENERATOR/update','DataController@updatesbmgenerator');

Route::get('/dashboard/SUMBERMANJING/RECTIFIER',['as' => 'sbm_rectifier', 'uses' =>'DataController@indexsbmrectifier']);
Route::get('/dashboard/SUMBERMANJING/RECTIFIER/tambah','DataController@tambahsbmrectifier');
Route::post('/dashboard/SUMBERMANJING/RECTIFIER/store','DataController@storesbmrectifier');
Route::post('/dashboard/SUMBERMANJING/RECTIFIER/update','DataController@updatesbmrectifier');

Route::get('/dashboard/SUMBERMANJING/BATTERE',['as' => 'sbm_battere', 'uses' =>'DataController@indexsbmbattere']);
Route::get('/dashboard/SUMBERMANJING/BATTERE/tambah','DataController@tambahsbmbattere');
Route::post('/dashboard/SUMBERMANJING/BATTERE/store','DataController@storesbmbattere');
Route::post('/dashboard/SUMBERMANJING/BATTERE/update','DataController@updatesbmbattere');

//

Route::get('/dashboard/SUMBER PUCUNG/PLN',['as' => 'sbp_pln', 'uses' =>'DataController@indexsbppln']);
Route::get('/dashboard/SUMBER PUCUNG/PLN/tambah','DataController@tambahsbppln');
Route::post('/dashboard/SUMBER PUCUNG/PLN/store','DataController@storesbppln');
Route::post('/dashboard/SUMBER PUCUNG/PLN/update','DataController@updatesbppln');

Route::get('/dashboard/SUMBER PUCUNG/AC',['as' => 'sbp_ac', 'uses' =>'DataController@indexsbpac']);
Route::get('/dashboard/SUMBER PUCUNG/AC/tambah','DataController@tambahsbpac');
Route::post('/dashboard/SUMBER PUCUNG/AC/store','DataController@storesbpac');
Route::post('/dashboard/SUMBER PUCUNG/AC/update','DataController@updatesbpac');

Route::get('/dashboard/SUMBER PUCUNG/GENERATOR',['as' => 'sbp_generator', 'uses' =>'DataController@indexsbpgenerator']);
Route::get('/dashboard/SUMBER PUCUNG/GENERATOR/tambah','DataController@tambahsbpgenerator');
Route::post('/dashboard/SUMBER PUCUNG/GENERATOR/store','DataController@storesbpgenerator');
Route::post('/dashboard/SUMBER PUCUNG/GENERATOR/update','DataController@updatesbpgenerator');

Route::get('/dashboard/SUMBER PUCUNG/RECTIFIER',['as' => 'sbp_rectifier', 'uses' =>'DataController@indexsbprectifier']);
Route::get('/dashboard/SUMBER PUCUNG/RECTIFIER/tambah','DataController@tambahsbprectifier');
Route::post('/dashboard/SUMBER PUCUNG/RECTIFIER/store','DataController@storesbprectifier');
Route::post('/dashboard/SUMBER PUCUNG/RECTIFIER/update','DataController@updatesbprectifier');

Route::get('/dashboard/SUMBER PUCUNG/BATTERE',['as' => 'sbp_battere', 'uses' =>'DataController@indexsbpbattere']);
Route::get('/dashboard/SUMBER PUCUNG/BATTERE/tambah','DataController@tambahsbpbattere');
Route::post('/dashboard/SUMBER PUCUNG/BATTERE/store','DataController@storesbpbattere');
Route::post('/dashboard/SUMBER PUCUNG/BATTERE/update','DataController@updatesbpbattere');

//

Route::get('/dashboard/SINGOSARI/PLN',['as' => 'sgs_pln', 'uses' =>'DataController@indexsgspln']);
Route::get('/dashboard/SINGOSARI/PLN/tambah','DataController@tambahsgspln');
Route::post('/dashboard/SINGOSARI/PLN/store','DataController@storesgspln');
Route::post('/dashboard/SINGOSARI/PLN/update','DataController@updatesgspln');

Route::get('/dashboard/SINGOSARI/AC',['as' => 'sgs_ac', 'uses' =>'DataController@indexsgsac']);
Route::get('/dashboard/SINGOSARI/AC/tambah','DataController@tambahsgsac');
Route::post('/dashboard/SINGOSARI/AC/store','DataController@storesgsac');
Route::post('/dashboard/SINGOSARI/AC/update','DataController@updatesgsac');

Route::get('/dashboard/SINGOSARI/GENERATOR',['as' => 'sgs_generator', 'uses' =>'DataController@indexsgsgenerator']);
Route::get('/dashboard/SINGOSARI/GENERATOR/tambah','DataController@tambahsgsgenerator');
Route::post('/dashboard/SINGOSARI/GENERATOR/store','DataController@storesgsgenerator');
Route::post('/dashboard/SINGOSARI/GENERATOR/update','DataController@updatesgsgenerator');

Route::get('/dashboard/SINGOSARI/RECTIFIER',['as' => 'sgs_rectifier', 'uses' =>'DataController@indexsgsrectifier']);
Route::get('/dashboard/SINGOSARI/RECTIFIER/tambah','DataController@tambahsgsrectifier');
Route::post('/dashboard/SINGOSARI/RECTIFIER/store','DataController@storesgsrectifier');
Route::post('/dashboard/SINGOSARI/RECTIFIER/update','DataController@updatesgsrectifier');

Route::get('/dashboard/SINGOSARI/BATTERE',['as' => 'sgs_battere', 'uses' =>'DataController@indexsgsbattere']);
Route::get('/dashboard/SINGOSARI/BATTERE/tambah','DataController@tambahsgsbattere');
Route::post('/dashboard/SINGOSARI/BATTERE/store','DataController@storesgsbattere');
Route::post('/dashboard/SINGOSARI/BATTERE/update','DataController@updatesgsbattere');

//

Route::get('/dashboard/SAWOJAJAR/PLN',['as' => 'swj_pln', 'uses' =>'DataController@indexswjpln']);
Route::get('/dashboard/SAWOJAJAR/PLN/tambah','DataController@tambahswjpln');
Route::post('/dashboard/SAWOJAJAR/PLN/store','DataController@storeswjpln');
Route::post('/dashboard/SAWOJAJAR/PLN/update','DataController@updateswjpln');

Route::get('/dashboard/SAWOJAJAR/AC',['as' => 'swj_ac', 'uses' =>'DataController@indexswjac']);
Route::get('/dashboard/SAWOJAJAR/AC/tambah','DataController@tambahswjac');
Route::post('/dashboard/SAWOJAJAR/AC/store','DataController@storeswjac');
Route::post('/dashboard/SAWOJAJAR/AC/update','DataController@updateswjac');

Route::get('/dashboard/SAWOJAJAR/GENERATOR',['as' => 'swj_generator', 'uses' =>'DataController@indexswjgenerator']);
Route::get('/dashboard/SAWOJAJAR/GENERATOR/tambah','DataController@tambahswjgenerator');
Route::post('/dashboard/SAWOJAJAR/GENERATOR/store','DataController@storeswjgenerator');
Route::post('/dashboard/SAWOJAJAR/GENERATOR/update','DataController@updateswjgenerator');

Route::get('/dashboard/SAWOJAJAR/RECTIFIER',['as' => 'swj_rectifier', 'uses' =>'DataController@indexswjrectifier']);
Route::get('/dashboard/SAWOJAJAR/RECTIFIER/tambah','DataController@tambahswjrectifier');
Route::post('/dashboard/SAWOJAJAR/RECTIFIER/store','DataController@storeswjrectifier');
Route::post('/dashboard/SAWOJAJAR/RECTIFIER/update','DataController@updateswjrectifier');

Route::get('/dashboard/SAWOJAJAR/BATTERE',['as' => 'swj_battere', 'uses' =>'DataController@indexswjbattere']);
Route::get('/dashboard/SAWOJAJAR/BATTERE/tambah','DataController@tambahswjbattere');
Route::post('/dashboard/SAWOJAJAR/BATTERE/store','DataController@storeswjbattere');
Route::post('/dashboard/SAWOJAJAR/BATTERE/update','DataController@updateswjbattere');

//

Route::get('/dashboard/TUMPANG/PLN',['as' => 'tmp_pln', 'uses' =>'DataController@indextmppln']);
Route::get('/dashboard/TUMPANG/PLN/tambah','DataController@tambahtmppln');
Route::post('/dashboard/TUMPANG/PLN/store','DataController@storetmppln');
Route::post('/dashboard/TUMPANG/PLN/update','DataController@updatetmppln');

Route::get('/dashboard/TUMPANG/AC',['as' => 'tmp_ac', 'uses' =>'DataController@indextmpac']);
Route::get('/dashboard/TUMPANG/AC/tambah','DataController@tambahtmpac');
Route::post('/dashboard/TUMPANG/AC/store','DataController@storetmpac');
Route::post('/dashboard/TUMPANG/AC/update','DataController@updatetmpac');

Route::get('/dashboard/TUMPANG/GENERATOR',['as' => 'tmp_generator', 'uses' =>'DataController@indextmpgenerator']);
Route::get('/dashboard/TUMPANG/GENERATOR/tambah','DataController@tambahtmpgenerator');
Route::post('/dashboard/TUMPANG/GENERATOR/store','DataController@storetmpgenerator');
Route::post('/dashboard/TUMPANG/GENERATOR/update','DataController@updatetmpgenerator');

Route::get('/dashboard/TUMPANG/RECTIFIER',['as' => 'tmp_rectifier', 'uses' =>'DataController@indextmprectifier']);
Route::get('/dashboard/TUMPANG/RECTIFIER/tambah','DataController@tambahtmprectifier');
Route::post('/dashboard/TUMPANG/RECTIFIER/store','DataController@storetmprectifier');
Route::post('/dashboard/TUMPANG/RECTIFIER/update','DataController@updatetmprectifier');

Route::get('/dashboard/TUMPANG/BATTERE',['as' => 'tmp_battere', 'uses' =>'DataController@indextmpbattere']);
Route::get('/dashboard/TUMPANG/BATTERE/tambah','DataController@tambahtmpbattere');
Route::post('/dashboard/TUMPANG/BATTERE/store','DataController@storetmpbattere');
Route::post('/dashboard/TUMPANG/BATTERE/update','DataController@updatetmpbattere');

//

Route::get('/dashboard/TUREN/PLN',['as' => 'tur_pln', 'uses' =>'DataController@indexturpln']);
Route::get('/dashboard/TUREN/PLN/tambah','DataController@tambahturpln');
Route::post('/dashboard/TUREN/PLN/store','DataController@storeturpln');
Route::post('/dashboard/TUREN/PLN/update','DataController@updateturpln');

Route::get('/dashboard/TUREN/AC',['as' => 'tur_ac', 'uses' =>'DataController@indexturac']);
Route::get('/dashboard/TUREN/AC/tambah','DataController@tambahturac');
Route::post('/dashboard/TUREN/AC/store','DataController@storeturac');
Route::post('/dashboard/TUREN/AC/update','DataController@updateturac');

Route::get('/dashboard/TUREN/GENERATOR',['as' => 'tur_generator', 'uses' =>'DataController@indexturgenerator']);
Route::get('/dashboard/TUREN/GENERATOR/tambah','DataController@tambahturgenerator');
Route::post('/dashboard/TUREN/GENERATOR/store','DataController@storeturgenerator');
Route::post('/dashboard/TUREN/GENERATOR/update','DataController@updateturgenerator');

Route::get('/dashboard/TUREN/RECTIFIER',['as' => 'tur_rectifier', 'uses' =>'DataController@indexturrectifier']);
Route::get('/dashboard/TUREN/RECTIFIER/tambah','DataController@tambahturrectifier');
Route::post('/dashboard/TUREN/RECTIFIER/store','DataController@storeturrectifier');
Route::post('/dashboard/TUREN/RECTIFIER/update','DataController@updateturrectifier');

Route::get('/dashboard/TUREN/BATTERE',['as' => 'tur_battere', 'uses' =>'DataController@indexturbattere']);
Route::get('/dashboard/TUREN/BATTERE/tambah','DataController@tambahturbattere');
Route::post('/dashboard/TUREN/BATTERE/store','DataController@storeturbattere');
Route::post('/dashboard/TUREN/BATTERE/update','DataController@updateturbattere');

//

Route::get('/dashboard/BAJAWA/PLN',['as' => 'bjw_pln', 'uses' =>'DataController@indexbjwpln']);
Route::get('/dashboard/BAJAWA/PLN/tambah','DataController@tambahbjwpln');
Route::post('/dashboard/BAJAWA/PLN/store','DataController@storebjwpln');
Route::post('/dashboard/BAJAWA/PLN/update','DataController@updatebjwpln');

Route::get('/dashboard/BAJAWA/AC',['as' => 'bjw_ac', 'uses' =>'DataController@indexbjwac']);
Route::get('/dashboard/BAJAWA/AC/tambah','DataController@tambahbjwac');
Route::post('/dashboard/BAJAWA/AC/store','DataController@storebjwac');
Route::post('/dashboard/BAJAWA/AC/update','DataController@updatebjwac');

Route::get('/dashboard/BAJAWA/GENERATOR',['as' => 'bjw_generator', 'uses' =>'DataController@indexbjwgenerator']);
Route::get('/dashboard/BAJAWA/GENERATOR/tambah','DataController@tambahbjwgenerator');
Route::post('/dashboard/BAJAWA/GENERATOR/store','DataController@storebjwgenerator');
Route::post('/dashboard/BAJAWA/GENERATOR/update','DataController@updatebjwgenerator');

Route::get('/dashboard/BAJAWA/RECTIFIER',['as' => 'bjw_rectifier', 'uses' =>'DataController@indexbjwrectifier']);
Route::get('/dashboard/BAJAWA/RECTIFIER/tambah','DataController@tambahbjwrectifier');
Route::post('/dashboard/BAJAWA/RECTIFIER/store','DataController@storebjwrectifier');
Route::post('/dashboard/BAJAWA/RECTIFIER/update','DataController@updatebjwrectifier');

Route::get('/dashboard/BAJAWA/BATTERE',['as' => 'bjw_battere', 'uses' =>'DataController@indexbjwbattere']);
Route::get('/dashboard/BAJAWA/BATTERE/tambah','DataController@tambahbjwbattere');
Route::post('/dashboard/BAJAWA/BATTERE/store','DataController@storebjwbattere');
Route::post('/dashboard/BAJAWA/BATTERE/update','DataController@updatebjwbattere');

//

Route::get('/dashboard/ENDE/PLN',['as' => 'end_pln', 'uses' =>'DataController@indexendpln']);
Route::get('/dashboard/ENDE/PLN/tambah','DataController@tambahendpln');
Route::post('/dashboard/ENDE/PLN/store','DataController@storeendpln');
Route::post('/dashboard/ENDE/PLN/update','DataController@updateendpln');

Route::get('/dashboard/ENDE/AC',['as' => 'end_ac', 'uses' =>'DataController@indexendac']);
Route::get('/dashboard/ENDE/AC/tambah','DataController@tambahendac');
Route::post('/dashboard/ENDE/AC/store','DataController@storeendac');
Route::post('/dashboard/ENDE/AC/update','DataController@updateendac');

Route::get('/dashboard/ENDE/GENERATOR',['as' => 'end_generator', 'uses' =>'DataController@indexendgenerator']);
Route::get('/dashboard/ENDE/GENERATOR/tambah','DataController@tambahendgenerator');
Route::post('/dashboard/ENDE/GENERATOR/store','DataController@storeendgenerator');
Route::post('/dashboard/ENDE/GENERATOR/update','DataController@updateendgenerator');

Route::get('/dashboard/ENDE/RECTIFIER',['as' => 'end_rectifier', 'uses' =>'DataController@indexendrectifier']);
Route::get('/dashboard/ENDE/RECTIFIER/tambah','DataController@tambahendrectifier');
Route::post('/dashboard/ENDE/RECTIFIER/store','DataController@storeendrectifier');
Route::post('/dashboard/ENDE/RECTIFIER/update','DataController@updateendrectifier');

Route::get('/dashboard/ENDE/BATTERE',['as' => 'end_battere', 'uses' =>'DataController@indexendbattere']);
Route::get('/dashboard/ENDE/BATTERE/tambah','DataController@tambahendbattere');
Route::post('/dashboard/ENDE/BATTERE/store','DataController@storeendbattere');
Route::post('/dashboard/ENDE/BATTERE/update','DataController@updateendbattere');

//

Route::get('/dashboard/LABUHANBAJO/PLN',['as' => 'lbo_pln', 'uses' =>'DataController@indexlbopln']);
Route::get('/dashboard/LABUHANBAJO/PLN/tambah','DataController@tambahlbopln');
Route::post('/dashboard/LABUHANBAJO/PLN/store','DataController@storelbopln');
Route::post('/dashboard/LABUHANBAJO/PLN/update','DataController@updatelbopln');

Route::get('/dashboard/LABUHANBAJO/AC',['as' => 'lbo_ac', 'uses' =>'DataController@indexlboac']);
Route::get('/dashboard/LABUHANBAJO/AC/tambah','DataController@tambahlboac');
Route::post('/dashboard/LABUHANBAJO/AC/store','DataController@storelboac');
Route::post('/dashboard/LABUHANBAJO/AC/update','DataController@updatelboac');

Route::get('/dashboard/LABUHANBAJO/GENERATOR',['as' => 'lbo_generator', 'uses' =>'DataController@indexlbogenerator']);
Route::get('/dashboard/LABUHANBAJO/GENERATOR/tambah','DataController@tambahlbogenerator');
Route::post('/dashboard/LABUHANBAJO/GENERATOR/store','DataController@storelbogenerator');
Route::post('/dashboard/LABUHANBAJO/GENERATOR/update','DataController@updatelbogenerator');

Route::get('/dashboard/LABUHANBAJO/RECTIFIER',['as' => 'lbo_rectifier', 'uses' =>'DataController@indexlborectifier']);
Route::get('/dashboard/LABUHANBAJO/RECTIFIER/tambah','DataController@tambahlborectifier');
Route::post('/dashboard/LABUHANBAJO/RECTIFIER/store','DataController@storelborectifier');
Route::post('/dashboard/LABUHANBAJO/RECTIFIER/update','DataController@updatelborectifier');

Route::get('/dashboard/LABUHANBAJO/BATTERE',['as' => 'lbo_battere', 'uses' =>'DataController@indexlbobattere']);
Route::get('/dashboard/LABUHANBAJO/BATTERE/tambah','DataController@tambahlbobattere');
Route::post('/dashboard/LABUHANBAJO/BATTERE/store','DataController@storelbobattere');
Route::post('/dashboard/LABUHANBAJO/BATTERE/update','DataController@updatelbobattere');

//

Route::get('/dashboard/LARANTUKA/PLN',['as' => 'lrt_pln', 'uses' =>'DataController@indexlrtpln']);
Route::get('/dashboard/LARANTUKA/PLN/tambah','DataController@tambahlrtpln');
Route::post('/dashboard/LARANTUKA/PLN/store','DataController@storelrtpln');
Route::post('/dashboard/LARANTUKA/PLN/update','DataController@updatelrtpln');

Route::get('/dashboard/LARANTUKA/AC',['as' => 'lrt_ac', 'uses' =>'DataController@indexlrtac']);
Route::get('/dashboard/LARANTUKA/AC/tambah','DataController@tambahlrtac');
Route::post('/dashboard/LARANTUKA/AC/store','DataController@storelrtac');
Route::post('/dashboard/LARANTUKA/AC/update','DataController@updatelrtac');

Route::get('/dashboard/LARANTUKA/GENERATOR',['as' => 'lrt_generator', 'uses' =>'DataController@indexlrtgenerator']);
Route::get('/dashboard/LARANTUKA/GENERATOR/tambah','DataController@tambahlrtgenerator');
Route::post('/dashboard/LARANTUKA/GENERATOR/store','DataController@storelrtgenerator');
Route::post('/dashboard/LARANTUKA/GENERATOR/update','DataController@updatelrtgenerator');

Route::get('/dashboard/LARANTUKA/RECTIFIER',['as' => 'lrt_rectifier', 'uses' =>'DataController@indexlrtrectifier']);
Route::get('/dashboard/LARANTUKA/RECTIFIER/tambah','DataController@tambahlrtrectifier');
Route::post('/dashboard/LARANTUKA/RECTIFIER/store','DataController@storelrtrectifier');
Route::post('/dashboard/LARANTUKA/RECTIFIER/update','DataController@updatelrtrectifier');

Route::get('/dashboard/LARANTUKA/BATTERE',['as' => 'lrt_battere', 'uses' =>'DataController@indexlrtbattere']);
Route::get('/dashboard/LARANTUKA/BATTERE/tambah','DataController@tambahlrtbattere');
Route::post('/dashboard/LARANTUKA/BATTERE/store','DataController@storelrtbattere');
Route::post('/dashboard/LARANTUKA/BATTERE/update','DataController@updatelrtbattere');

//

Route::get('/dashboard/MAUMERE/PLN',['as' => 'mmr_pln', 'uses' =>'DataController@indexmmrpln']);
Route::get('/dashboard/MAUMERE/PLN/tambah','DataController@tambahmmrpln');
Route::post('/dashboard/MAUMERE/PLN/store','DataController@storemmrpln');
Route::post('/dashboard/MAUMERE/PLN/update','DataController@updatemmrpln');

Route::get('/dashboard/MAUMERE/AC',['as' => 'mmr_ac', 'uses' =>'DataController@indexmmrac']);
Route::get('/dashboard/MAUMERE/AC/tambah','DataController@tambahmmrac');
Route::post('/dashboard/MAUMERE/AC/store','DataController@storemmrac');
Route::post('/dashboard/MAUMERE/AC/update','DataController@updatemmrac');

Route::get('/dashboard/MAUMERE/GENERATOR',['as' => 'mmr_generator', 'uses' =>'DataController@indexmmrgenerator']);
Route::get('/dashboard/MAUMERE/GENERATOR/tambah','DataController@tambahmmrgenerator');
Route::post('/dashboard/MAUMERE/GENERATOR/store','DataController@storemmrgenerator');
Route::post('/dashboard/MAUMERE/GENERATOR/update','DataController@updatemmrgenerator');

Route::get('/dashboard/MAUMERE/RECTIFIER',['as' => 'mmr_rectifier', 'uses' =>'DataController@indexmmrrectifier']);
Route::get('/dashboard/MAUMERE/RECTIFIER/tambah','DataController@tambahmmrrectifier');
Route::post('/dashboard/MAUMERE/RECTIFIER/store','DataController@storemmrrectifier');
Route::post('/dashboard/MAUMERE/RECTIFIER/update','DataController@updatemmrrectifier');

Route::get('/dashboard/MAUMERE/BATTERE',['as' => 'mmr_battere', 'uses' =>'DataController@indexmmrbattere']);
Route::get('/dashboard/MAUMERE/BATTERE/tambah','DataController@tambahmmrbattere');
Route::post('/dashboard/MAUMERE/BATTERE/store','DataController@storemmrbattere');
Route::post('/dashboard/MAUMERE/BATTERE/update','DataController@updatemmrbattere');

//

Route::get('/dashboard/RUTENG/PLN',['as' => 'rte_pln', 'uses' =>'DataController@indexrtepln']);
Route::get('/dashboard/RUTENG/PLN/tambah','DataController@tambahrtepln');
Route::post('/dashboard/RUTENG/PLN/store','DataController@storertepln');
Route::post('/dashboard/RUTENG/PLN/update','DataController@updatertepln');

Route::get('/dashboard/RUTENG/AC',['as' => 'rte_ac', 'uses' =>'DataController@indexrteac']);
Route::get('/dashboard/RUTENG/AC/tambah','DataController@tambahrteac');
Route::post('/dashboard/RUTENG/AC/store','DataController@storerteac');
Route::post('/dashboard/RUTENG/AC/update','DataController@updaterteac');

Route::get('/dashboard/RUTENG/GENERATOR',['as' => 'rte_generator', 'uses' =>'DataController@indexrtegenerator']);
Route::get('/dashboard/RUTENG/GENERATOR/tambah','DataController@tambahrtegenerator');
Route::post('/dashboard/RUTENG/GENERATOR/store','DataController@storertegenerator');
Route::post('/dashboard/RUTENG/GENERATOR/update','DataController@updatertegenerator');

Route::get('/dashboard/RUTENG/RECTIFIER',['as' => 'rte_rectifier', 'uses' =>'DataController@indexrterectifier']);
Route::get('/dashboard/RUTENG/RECTIFIER/tambah','DataController@tambahrterectifier');
Route::post('/dashboard/RUTENG/RECTIFIER/store','DataController@storerterectifier');
Route::post('/dashboard/RUTENG/RECTIFIER/update','DataController@updaterterectifier');

Route::get('/dashboard/RUTENG/BATTERE',['as' => 'rte_battere', 'uses' =>'DataController@indexrtebattere']);
Route::get('/dashboard/RUTENG/BATTERE/tambah','DataController@tambahrtebattere');
Route::post('/dashboard/RUTENG/BATTERE/store','DataController@storertebattere');
Route::post('/dashboard/RUTENG/BATTERE/update','DataController@updatertebattere');

//

Route::get('/dashboard/WAINGAPI/PLN',['as' => 'wgp_pln', 'uses' =>'DataController@indexwgppln']);
Route::get('/dashboard/WAINGAPI/PLN/tambah','DataController@tambahwgppln');
Route::post('/dashboard/WAINGAPI/PLN/store','DataController@storewgppln');
Route::post('/dashboard/WAINGAPI/PLN/update','DataController@updatewgppln');

Route::get('/dashboard/WAINGAPI/AC',['as' => 'wgp_ac', 'uses' =>'DataController@indexwgpac']);
Route::get('/dashboard/WAINGAPI/AC/tambah','DataController@tambahwgpac');
Route::post('/dashboard/WAINGAPI/AC/store','DataController@storewgpac');
Route::post('/dashboard/WAINGAPI/AC/update','DataController@updatewgpac');

Route::get('/dashboard/WAINGAPI/GENERATOR',['as' => 'wgp_generator', 'uses' =>'DataController@indexwgpgenerator']);
Route::get('/dashboard/WAINGAPI/GENERATOR/tambah','DataController@tambahwgpgenerator');
Route::post('/dashboard/WAINGAPI/GENERATOR/store','DataController@storewgpgenerator');
Route::post('/dashboard/WAINGAPI/GENERATOR/update','DataController@updatewgpgenerator');

Route::get('/dashboard/WAINGAPI/RECTIFIER',['as' => 'wgp_rectifier', 'uses' =>'DataController@indexwgprectifier']);
Route::get('/dashboard/WAINGAPI/RECTIFIER/tambah','DataController@tambahwgprectifier');
Route::post('/dashboard/WAINGAPI/RECTIFIER/store','DataController@storewgprectifier');
Route::post('/dashboard/WAINGAPI/RECTIFIER/update','DataController@updatewgprectifier');

Route::get('/dashboard/WAINGAPI/BATTERE',['as' => 'wgp_battere', 'uses' =>'DataController@indexwgpbattere']);
Route::get('/dashboard/WAINGAPI/BATTERE/tambah','DataController@tambahwgpbattere');
Route::post('/dashboard/WAINGAPI/BATTERE/store','DataController@storewgpbattere');
Route::post('/dashboard/WAINGAPI/BATTERE/update','DataController@updatewgpbattere');

//
Route::get('/dashboard/ALAS/PLN',['as' => 'ala_pln', 'uses' =>'DataController@indexalapln']);
Route::get('/dashboard/ALAS/PLN/tambah','DataController@tambahalapln');
Route::post('/dashboard/ALAS/PLN/store','DataController@storealapln');
Route::post('/dashboard/ALAS/PLN/update','DataController@updatealapln');

Route::get('/dashboard/ALAS/AC',['as' => 'ala_ac', 'uses' =>'DataController@indexalaac']);
Route::get('/dashboard/ALAS/AC/tambah','DataController@tambahalaac');
Route::post('/dashboard/ALAS/AC/store','DataController@storealaac');
Route::post('/dashboard/ALAS/AC/update','DataController@updatealaac');

Route::get('/dashboard/ALAS/GENERATOR',['as' => 'ala_generator', 'uses' =>'DataController@indexalagenerator']);
Route::get('/dashboard/ALAS/GENERATOR/tambah','DataController@tambahalagenerator');
Route::post('/dashboard/ALAS/GENERATOR/store','DataController@storealagenerator');
Route::post('/dashboard/ALAS/GENERATOR/update','DataController@updatealagenerator');

Route::get('/dashboard/ALAS/RECTIFIER',['as' => 'ala_rectifier', 'uses' =>'DataController@indexalarectifier']);
Route::get('/dashboard/ALAS/RECTIFIER/tambah','DataController@tambahalarectifier');
Route::post('/dashboard/ALAS/RECTIFIER/store','DataController@storealarectifier');
Route::post('/dashboard/ALAS/RECTIFIER/update','DataController@updatealarectifier');

Route::get('/dashboard/ALAS/BATTERE',['as' => 'ala_battere', 'uses' =>'DataController@indexalabattere']);
Route::get('/dashboard/ALAS/BATTERE/tambah','DataController@tambahalabattere');
Route::post('/dashboard/ALAS/BATTERE/store','DataController@storealabattere');
Route::post('/dashboard/ALAS/BATTERE/update','DataController@updatealabattere');

//
Route::get('/dashboard/BIMA/PLN',['as' => 'bim_pln', 'uses' =>'DataController@indexbimpln']);
Route::get('/dashboard/BIMA/PLN/tambah','DataController@tambahbimpln');
Route::post('/dashboard/BIMA/PLN/store','DataController@storebimpln');
Route::post('/dashboard/BIMA/PLN/update','DataController@updatebimpln');

Route::get('/dashboard/BIMA/AC',['as' => 'bim_ac', 'uses' =>'DataController@indexbimac']);
Route::get('/dashboard/BIMA/AC/tambah','DataController@tambahbimac');
Route::post('/dashboard/BIMA/AC/store','DataController@storebimac');
Route::post('/dashboard/BIMA/AC/update','DataController@updatebimac');

Route::get('/dashboard/BIMA/GENERATOR',['as' => 'bim_generator', 'uses' =>'DataController@indexbimgenerator']);
Route::get('/dashboard/BIMA/GENERATOR/tambah','DataController@tambahbimgenerator');
Route::post('/dashboard/BIMA/GENERATOR/store','DataController@storebimgenerator');
Route::post('/dashboard/BIMA/GENERATOR/update','DataController@updatebimgenerator');

Route::get('/dashboard/BIMA/RECTIFIER',['as' => 'bim_rectifier', 'uses' =>'DataController@indexbimrectifier']);
Route::get('/dashboard/BIMA/RECTIFIER/tambah','DataController@tambahbimrectifier');
Route::post('/dashboard/BIMA/RECTIFIER/store','DataController@storebimrectifier');
Route::post('/dashboard/BIMA/RECTIFIER/update','DataController@updatebimrectifier');

Route::get('/dashboard/BIMA/BATTERE',['as' => 'bim_battere', 'uses' =>'DataController@indexbimbattere']);
Route::get('/dashboard/BIMA/BATTERE/tambah','DataController@tambahbimbattere');
Route::post('/dashboard/BIMA/BATTERE/store','DataController@storebimbattere');
Route::post('/dashboard/BIMA/BATTERE/update','DataController@updatebimbattere');

//
Route::get('/dashboard/DOMPU/PLN',['as' => 'dmp_pln', 'uses' =>'DataController@indexdmppln']);
Route::get('/dashboard/DOMPU/PLN/tambah','DataController@tambahdmppln');
Route::post('/dashboard/DOMPU/PLN/store','DataController@storedmppln');
Route::post('/dashboard/DOMPU/PLN/update','DataController@updatedmppln');

Route::get('/dashboard/DOMPU/AC',['as' => 'dmp_ac', 'uses' =>'DataController@indexdmpac']);
Route::get('/dashboard/DOMPU/AC/tambah','DataController@tambahdmpac');
Route::post('/dashboard/DOMPU/AC/store','DataController@storedmpac');
Route::post('/dashboard/DOMPU/AC/update','DataController@updatedmpac');

Route::get('/dashboard/DOMPU/GENERATOR',['as' => 'dmp_generator', 'uses' =>'DataController@indexdmpgenerator']);
Route::get('/dashboard/DOMPU/GENERATOR/tambah','DataController@tambahdmpgenerator');
Route::post('/dashboard/DOMPU/GENERATOR/store','DataController@storedmpgenerator');
Route::post('/dashboard/DOMPU/GENERATOR/update','DataController@updatedmpgenerator');

Route::get('/dashboard/DOMPU/RECTIFIER',['as' => 'dmp_rectifier', 'uses' =>'DataController@indexdmprectifier']);
Route::get('/dashboard/DOMPU/RECTIFIER/tambah','DataController@tambahdmprectifier');
Route::post('/dashboard/DOMPU/RECTIFIER/store','DataController@storedmprectifier');
Route::post('/dashboard/DOMPU/RECTIFIER/update','DataController@updatedmprectifier');

Route::get('/dashboard/DOMPU/BATTERE',['as' => 'dmp_battere', 'uses' =>'DataController@indexdmpbattere']);
Route::get('/dashboard/DOMPU/BATTERE/tambah','DataController@tambahdmpbattere');
Route::post('/dashboard/DOMPU/BATTERE/store','DataController@storedmpbattere');
Route::post('/dashboard/DOMPU/BATTERE/update','DataController@updatedmpbattere');

//
Route::get('/dashboard/GERUNG/PLN',['as' => 'ger_pln', 'uses' =>'DataController@indexgerpln']);
Route::get('/dashboard/GERUNG/PLN/tambah','DataController@tambahgerpln');
Route::post('/dashboard/GERUNG/PLN/store','DataController@storegerpln');
Route::post('/dashboard/GERUNG/PLN/update','DataController@updategerpln');

Route::get('/dashboard/GERUNG/AC',['as' => 'ger_ac', 'uses' =>'DataController@indexgerac']);
Route::get('/dashboard/GERUNG/AC/tambah','DataController@tambahgerac');
Route::post('/dashboard/GERUNG/AC/store','DataController@storegerac');
Route::post('/dashboard/GERUNG/AC/update','DataController@updategerac');

Route::get('/dashboard/GERUNG/GENERATOR',['as' => 'ger_generator', 'uses' =>'DataController@indexgergenerator']);
Route::get('/dashboard/GERUNG/GENERATOR/tambah','DataController@tambahgergenerator');
Route::post('/dashboard/GERUNG/GENERATOR/store','DataController@storegergenerator');
Route::post('/dashboard/GERUNG/GENERATOR/update','DataController@updategergenerator');

Route::get('/dashboard/GERUNG/RECTIFIER',['as' => 'ger_rectifier', 'uses' =>'DataController@indexgerrectifier']);
Route::get('/dashboard/GERUNG/RECTIFIER/tambah','DataController@tambahgerrectifier');
Route::post('/dashboard/GERUNG/RECTIFIER/store','DataController@storegerrectifier');
Route::post('/dashboard/GERUNG/RECTIFIER/update','DataController@updategerrectifier');

Route::get('/dashboard/GERUNG/BATTERE',['as' => 'ger_battere', 'uses' =>'DataController@indexgerbattere']);
Route::get('/dashboard/GERUNG/BATTERE/tambah','DataController@tambahgerbattere');
Route::post('/dashboard/GERUNG/BATTERE/store','DataController@storegerbattere');
Route::post('/dashboard/GERUNG/BATTERE/update','DataController@updategerbattere');

//
Route::get('/dashboard/MALUK/PLN',['as' => 'mlk_pln', 'uses' =>'DataController@indexmlkpln']);
Route::get('/dashboard/MALUK/PLN/tambah','DataController@tambahmlkpln');
Route::post('/dashboard/MALUK/PLN/store','DataController@storemlkpln');
Route::post('/dashboard/MALUK/PLN/update','DataController@updatemlkpln');

Route::get('/dashboard/MALUK/AC',['as' => 'mlk_ac', 'uses' =>'DataController@indexmlkac']);
Route::get('/dashboard/MALUK/AC/tambah','DataController@tambahmlkac');
Route::post('/dashboard/MALUK/AC/store','DataController@storemlkac');
Route::post('/dashboard/MALUK/AC/update','DataController@updatemlkac');

Route::get('/dashboard/MALUK/GENERATOR',['as' => 'mlk_generator', 'uses' =>'DataController@indexmlkgenerator']);
Route::get('/dashboard/MALUK/GENERATOR/tambah','DataController@tambahmlkgenerator');
Route::post('/dashboard/MALUK/GENERATOR/store','DataController@storemlkgenerator');
Route::post('/dashboard/MALUK/GENERATOR/update','DataController@updatemlkgenerator');

Route::get('/dashboard/MALUK/RECTIFIER',['as' => 'mlk_rectifier', 'uses' =>'DataController@indexmlkrectifier']);
Route::get('/dashboard/MALUK/RECTIFIER/tambah','DataController@tambahmlkrectifier');
Route::post('/dashboard/MALUK/RECTIFIER/store','DataController@storemlkrectifier');
Route::post('/dashboard/MALUK/RECTIFIER/update','DataController@updatemlkrectifier');

Route::get('/dashboard/MALUK/BATTERE',['as' => 'mlk_battere', 'uses' =>'DataController@indexmlkbattere']);
Route::get('/dashboard/MALUK/BATTERE/tambah','DataController@tambahmlkbattere');
Route::post('/dashboard/MALUK/BATTERE/store','DataController@storemlkbattere');
Route::post('/dashboard/MALUK/BATTERE/update','DataController@updatemlkbattere');

//
Route::get('/dashboard/MASBAGIK/PLN',['as' => 'mbg_pln', 'uses' =>'DataController@indexmbgpln']);
Route::get('/dashboard/MASBAGIK/PLN/tambah','DataController@tambahmbgpln');
Route::post('/dashboard/MASBAGIK/PLN/store','DataController@storembgpln');
Route::post('/dashboard/MASBAGIK/PLN/update','DataController@updatembgpln');

Route::get('/dashboard/MASBAGIK/AC',['as' => 'mbg_ac', 'uses' =>'DataController@indexmbgac']);
Route::get('/dashboard/MASBAGIK/AC/tambah','DataController@tambahmbgac');
Route::post('/dashboard/MASBAGIK/AC/store','DataController@storembgac');
Route::post('/dashboard/MASBAGIK/AC/update','DataController@updatembgac');

Route::get('/dashboard/MASBAGIK/GENERATOR',['as' => 'mbg_generator', 'uses' =>'DataController@indexmbggenerator']);
Route::get('/dashboard/MASBAGIK/GENERATOR/tambah','DataController@tambahmbggenerator');
Route::post('/dashboard/MASBAGIK/GENERATOR/store','DataController@storembggenerator');
Route::post('/dashboard/MASBAGIK/GENERATOR/update','DataController@updatembggenerator');

Route::get('/dashboard/MASBAGIK/RECTIFIER',['as' => 'mbg_rectifier', 'uses' =>'DataController@indexmbgrectifier']);
Route::get('/dashboard/MASBAGIK/RECTIFIER/tambah','DataController@tambahmbgrectifier');
Route::post('/dashboard/MASBAGIK/RECTIFIER/store','DataController@storembgrectifier');
Route::post('/dashboard/MASBAGIK/RECTIFIER/update','DataController@updatembgrectifier');

Route::get('/dashboard/MASBAGIK/BATTERE',['as' => 'mbg_battere', 'uses' =>'DataController@indexmbgbattere']);
Route::get('/dashboard/MASBAGIK/BATTERE/tambah','DataController@tambahmbgbattere');
Route::post('/dashboard/MASBAGIK/BATTERE/store','DataController@storembgbattere');
Route::post('/dashboard/MASBAGIK/BATTERE/update','DataController@updatembgbattere');

//
Route::get('/dashboard/MATARAM/PLN',['as' => 'mtr_pln', 'uses' =>'DataController@indexmtrpln']);
Route::get('/dashboard/MATARAM/PLN/tambah','DataController@tambahmtrpln');
Route::post('/dashboard/MATARAM/PLN/store','DataController@storemtrpln');
Route::post('/dashboard/MATARAM/PLN/update','DataController@updatemtrpln');

Route::get('/dashboard/MATARAM/AC',['as' => 'mtr_ac', 'uses' =>'DataController@indexmtrac']);
Route::get('/dashboard/MATARAM/AC/tambah','DataController@tambahmtrac');
Route::post('/dashboard/MATARAM/AC/store','DataController@storemtrac');
Route::post('/dashboard/MATARAM/AC/update','DataController@updatemtrac');

Route::get('/dashboard/MATARAM/GENERATOR',['as' => 'mtr_generator', 'uses' =>'DataController@indexmtrgenerator']);
Route::get('/dashboard/MATARAM/GENERATOR/tambah','DataController@tambahmtrgenerator');
Route::post('/dashboard/MATARAM/GENERATOR/store','DataController@storemtrgenerator');
Route::post('/dashboard/MATARAM/GENERATOR/update','DataController@updatemtrgenerator');

Route::get('/dashboard/MATARAM/RECTIFIER',['as' => 'mtr_rectifier', 'uses' =>'DataController@indexmtrrectifier']);
Route::get('/dashboard/MATARAM/RECTIFIER/tambah','DataController@tambahmtrrectifier');
Route::post('/dashboard/MATARAM/RECTIFIER/store','DataController@storemtrrectifier');
Route::post('/dashboard/MATARAM/RECTIFIER/update','DataController@updatemtrrectifier');

Route::get('/dashboard/MATARAM/BATTERE',['as' => 'mtr_battere', 'uses' =>'DataController@indexmtrbattere']);
Route::get('/dashboard/MATARAM/BATTERE/tambah','DataController@tambahmtrbattere');
Route::post('/dashboard/MATARAM/BATTERE/store','DataController@storemtrbattere');
Route::post('/dashboard/MATARAM/BATTERE/update','DataController@updatemtrbattere');

//
Route::get('/dashboard/PRAYA/PLN',['as' => 'pry_pln', 'uses' =>'DataController@indexprypln']);
Route::get('/dashboard/PRAYA/PLN/tambah','DataController@tambahprypln');
Route::post('/dashboard/PRAYA/PLN/store','DataController@storeprypln');
Route::post('/dashboard/PRAYA/PLN/update','DataController@updateprypln');

Route::get('/dashboard/PRAYA/AC',['as' => 'pry_ac', 'uses' =>'DataController@indexpryac']);
Route::get('/dashboard/PRAYA/AC/tambah','DataController@tambahpryac');
Route::post('/dashboard/PRAYA/AC/store','DataController@storepryac');
Route::post('/dashboard/PRAYA/AC/update','DataController@updatepryac');

Route::get('/dashboard/PRAYA/GENERATOR',['as' => 'pry_generator', 'uses' =>'DataController@indexprygenerator']);
Route::get('/dashboard/PRAYA/GENERATOR/tambah','DataController@tambahprygenerator');
Route::post('/dashboard/PRAYA/GENERATOR/store','DataController@storeprygenerator');
Route::post('/dashboard/PRAYA/GENERATOR/update','DataController@updateprygenerator');

Route::get('/dashboard/PRAYA/RECTIFIER',['as' => 'pry_rectifier', 'uses' =>'DataController@indexpryrectifier']);
Route::get('/dashboard/PRAYA/RECTIFIER/tambah','DataController@tambahpryrectifier');
Route::post('/dashboard/PRAYA/RECTIFIER/store','DataController@storepryrectifier');
Route::post('/dashboard/PRAYA/RECTIFIER/update','DataController@updatepryrectifier');

Route::get('/dashboard/PRAYA/BATTERE',['as' => 'pry_battere', 'uses' =>'DataController@indexprybattere']);
Route::get('/dashboard/PRAYA/BATTERE/tambah','DataController@tambahprybattere');
Route::post('/dashboard/PRAYA/BATTERE/store','DataController@storeprybattere');
Route::post('/dashboard/PRAYA/BATTERE/update','DataController@updateprybattere');

//
Route::get('/dashboard/SELONG/PLN',['as' => 'sel_pln', 'uses' =>'DataController@indexselpln']);
Route::get('/dashboard/SELONG/PLN/tambah','DataController@tambahselpln');
Route::post('/dashboard/SELONG/PLN/store','DataController@storeselpln');
Route::post('/dashboard/SELONG/PLN/update','DataController@updateselpln');

Route::get('/dashboard/SELONG/AC',['as' => 'sel_ac', 'uses' =>'DataController@indexselac']);
Route::get('/dashboard/SELONG/AC/tambah','DataController@tambahselac');
Route::post('/dashboard/SELONG/AC/store','DataController@storeselac');
Route::post('/dashboard/SELONG/AC/update','DataController@updateselac');

Route::get('/dashboard/SELONG/GENERATOR',['as' => 'sel_generator', 'uses' =>'DataController@indexselgenerator']);
Route::get('/dashboard/SELONG/GENERATOR/tambah','DataController@tambahselgenerator');
Route::post('/dashboard/SELONG/GENERATOR/store','DataController@storeselgenerator');
Route::post('/dashboard/SELONG/GENERATOR/update','DataController@updateselgenerator');

Route::get('/dashboard/SELONG/RECTIFIER',['as' => 'sel_rectifier', 'uses' =>'DataController@indexselrectifier']);
Route::get('/dashboard/SELONG/RECTIFIER/tambah','DataController@tambahselrectifier');
Route::post('/dashboard/SELONG/RECTIFIER/store','DataController@storeselrectifier');
Route::post('/dashboard/SELONG/RECTIFIER/update','DataController@updateselrectifier');

Route::get('/dashboard/SELONG/BATTERE',['as' => 'sel_battere', 'uses' =>'DataController@indexselbattere']);
Route::get('/dashboard/SELONG/BATTERE/tambah','DataController@tambahselbattere');
Route::post('/dashboard/SELONG/BATTERE/store','DataController@storeselbattere');
Route::post('/dashboard/SELONG/BATTERE/update','DataController@updateselbattere');

//
Route::get('/dashboard/SENGGIGI/PLN',['as' => 'sgg_pln', 'uses' =>'DataController@indexsggpln']);
Route::get('/dashboard/SENGGIGI/PLN/tambah','DataController@tambahsggpln');
Route::post('/dashboard/SENGGIGI/PLN/store','DataController@storesggpln');
Route::post('/dashboard/SENGGIGI/PLN/update','DataController@updatesggpln');

Route::get('/dashboard/SENGGIGI/AC',['as' => 'sgg_ac', 'uses' =>'DataController@indexsggac']);
Route::get('/dashboard/SENGGIGI/AC/tambah','DataController@tambahsggac');
Route::post('/dashboard/SENGGIGI/AC/store','DataController@storesggac');
Route::post('/dashboard/SENGGIGI/AC/update','DataController@updatesggac');

Route::get('/dashboard/SENGGIGI/GENERATOR',['as' => 'sgg_generator', 'uses' =>'DataController@indexsgggenerator']);
Route::get('/dashboard/SENGGIGI/GENERATOR/tambah','DataController@tambahsgggenerator');
Route::post('/dashboard/SENGGIGI/GENERATOR/store','DataController@storesgggenerator');
Route::post('/dashboard/SENGGIGI/GENERATOR/update','DataController@updatesgggenerator');

Route::get('/dashboard/SENGGIGI/RECTIFIER',['as' => 'sgg_rectifier', 'uses' =>'DataController@indexsggrectifier']);
Route::get('/dashboard/SENGGIGI/RECTIFIER/tambah','DataController@tambahsggrectifier');
Route::post('/dashboard/SENGGIGI/RECTIFIER/store','DataController@storesggrectifier');
Route::post('/dashboard/SENGGIGI/RECTIFIER/update','DataController@updatesggrectifier');

Route::get('/dashboard/SENGGIGI/BATTERE',['as' => 'sgg_battere', 'uses' =>'DataController@indexsggbattere']);
Route::get('/dashboard/SENGGIGI/BATTERE/tambah','DataController@tambahsggbattere');
Route::post('/dashboard/SENGGIGI/BATTERE/store','DataController@storesggbattere');
Route::post('/dashboard/SENGGIGI/BATTERE/update','DataController@updatesggbattere');

//
Route::get('/dashboard/SUMBAWA/PLN',['as' => 'sbw_pln', 'uses' =>'DataController@indexsbwpln']);
Route::get('/dashboard/SUMBAWA/PLN/tambah','DataController@tambahsbwpln');
Route::post('/dashboard/SUMBAWA/PLN/store','DataController@storesbwpln');
Route::post('/dashboard/SUMBAWA/PLN/update','DataController@updatesbwpln');

Route::get('/dashboard/SUMBAWA/AC',['as' => 'sbw_ac', 'uses' =>'DataController@indexsbwac']);
Route::get('/dashboard/SUMBAWA/AC/tambah','DataController@tambahsbwac');
Route::post('/dashboard/SUMBAWA/AC/store','DataController@storesbwac');
Route::post('/dashboard/SUMBAWA/AC/update','DataController@updatesbwac');

Route::get('/dashboard/SUMBAWA/GENERATOR',['as' => 'sbw_generator', 'uses' =>'DataController@indexsbwgenerator']);
Route::get('/dashboard/SUMBAWA/GENERATOR/tambah','DataController@tambahsbwgenerator');
Route::post('/dashboard/SUMBAWA/GENERATOR/store','DataController@storesbwgenerator');
Route::post('/dashboard/SUMBAWA/GENERATOR/update','DataController@updatesbwgenerator');

Route::get('/dashboard/SUMBAWA/RECTIFIER',['as' => 'sbw_rectifier', 'uses' =>'DataController@indexsbwrectifier']);
Route::get('/dashboard/SUMBAWA/RECTIFIER/tambah','DataController@tambahsbwrectifier');
Route::post('/dashboard/SUMBAWA/RECTIFIER/store','DataController@storesbwrectifier');
Route::post('/dashboard/SUMBAWA/RECTIFIER/update','DataController@updatesbwrectifier');

Route::get('/dashboard/SUMBAWA/BATTERE',['as' => 'sbw_battere', 'uses' =>'DataController@indexsbwbattere']);
Route::get('/dashboard/SUMBAWA/BATTERE/tambah','DataController@tambahsbwbattere');
Route::post('/dashboard/SUMBAWA/BATTERE/store','DataController@storesbwbattere');
Route::post('/dashboard/SUMBAWA/BATTERE/update','DataController@updatesbwbattere');

//
Route::get('/dashboard/SWETA/PLN',['as' => 'swe_pln', 'uses' =>'DataController@indexswepln']);
Route::get('/dashboard/SWETA/PLN/tambah','DataController@tambahswepln');
Route::post('/dashboard/SWETA/PLN/store','DataController@storeswepln');
Route::post('/dashboard/SWETA/PLN/update','DataController@updateswepln');

Route::get('/dashboard/SWETA/AC',['as' => 'swe_ac', 'uses' =>'DataController@indexsweac']);
Route::get('/dashboard/SWETA/AC/tambah','DataController@tambahsweac');
Route::post('/dashboard/SWETA/AC/store','DataController@storesweac');
Route::post('/dashboard/SWETA/AC/update','DataController@updatesweac');

Route::get('/dashboard/SWETA/GENERATOR',['as' => 'swe_generator', 'uses' =>'DataController@indexswegenerator']);
Route::get('/dashboard/SWETA/GENERATOR/tambah','DataController@tambahswegenerator');
Route::post('/dashboard/SWETA/GENERATOR/store','DataController@storeswegenerator');
Route::post('/dashboard/SWETA/GENERATOR/update','DataController@updateswegenerator');

Route::get('/dashboard/SWETA/RECTIFIER',['as' => 'swe_rectifier', 'uses' =>'DataController@indexswerectifier']);
Route::get('/dashboard/SWETA/RECTIFIER/tambah','DataController@tambahswerectifier');
Route::post('/dashboard/SWETA/RECTIFIER/store','DataController@storeswerectifier');
Route::post('/dashboard/SWETA/RECTIFIER/update','DataController@updateswerectifier');

Route::get('/dashboard/SWETA/BATTERE',['as' => 'swe_battere', 'uses' =>'DataController@indexswebattere']);
Route::get('/dashboard/SWETA/BATTERE/tambah','DataController@tambahswebattere');
Route::post('/dashboard/SWETA/BATTERE/store','DataController@storeswebattere');
Route::post('/dashboard/SWETA/BATTERE/update','DataController@updateswebattere');

//
Route::get('/dashboard/TENTE/PLN',['as' => 'tet_pln', 'uses' =>'DataController@indextetpln']);
Route::get('/dashboard/TENTE/PLN/tambah','DataController@tambahtetpln');
Route::post('/dashboard/TENTE/PLN/store','DataController@storetetpln');
Route::post('/dashboard/TENTE/PLN/update','DataController@updatetetpln');

Route::get('/dashboard/TENTE/AC',['as' => 'tet_ac', 'uses' =>'DataController@indextetac']);
Route::get('/dashboard/TENTE/AC/tambah','DataController@tambahtetac');
Route::post('/dashboard/TENTE/AC/store','DataController@storetetac');
Route::post('/dashboard/TENTE/AC/update','DataController@updatetetac');

Route::get('/dashboard/TENTE/GENERATOR',['as' => 'tet_generator', 'uses' =>'DataController@indextetgenerator']);
Route::get('/dashboard/TENTE/GENERATOR/tambah','DataController@tambahtetgenerator');
Route::post('/dashboard/TENTE/GENERATOR/store','DataController@storetetgenerator');
Route::post('/dashboard/TENTE/GENERATOR/update','DataController@updatetetgenerator');

Route::get('/dashboard/TENTE/RECTIFIER',['as' => 'tet_rectifier', 'uses' =>'DataController@indextetrectifier']);
Route::get('/dashboard/TENTE/RECTIFIER/tambah','DataController@tambahtetrectifier');
Route::post('/dashboard/TENTE/RECTIFIER/store','DataController@storetetrectifier');
Route::post('/dashboard/TENTE/RECTIFIER/update','DataController@updatetetrectifier');

Route::get('/dashboard/TENTE/BATTERE',['as' => 'tet_battere', 'uses' =>'DataController@indextetbattere']);
Route::get('/dashboard/TENTE/BATTERE/tambah','DataController@tambahtetbattere');
Route::post('/dashboard/TENTE/BATTERE/store','DataController@storetetbattere');
Route::post('/dashboard/TENTE/BATTERE/update','DataController@updatetetbattere');

//
Route::get('/dashboard/TALIWANG/PLN',['as' => 'tlw_pln', 'uses' =>'DataController@indextlwpln']);
Route::get('/dashboard/TALIWANG/PLN/tambah','DataController@tambahtlwpln');
Route::post('/dashboard/TALIWANG/PLN/store','DataController@storetlwpln');
Route::post('/dashboard/TALIWANG/PLN/update','DataController@updatetlwpln');

Route::get('/dashboard/TALIWANG/AC',['as' => 'tlw_ac', 'uses' =>'DataController@indextlwac']);
Route::get('/dashboard/TALIWANG/AC/tambah','DataController@tambahtlwac');
Route::post('/dashboard/TALIWANG/AC/store','DataController@storetlwac');
Route::post('/dashboard/TALIWANG/AC/update','DataController@updatetlwac');

Route::get('/dashboard/TALIWANG/GENERATOR',['as' => 'tlw_generator', 'uses' =>'DataController@indextlwgenerator']);
Route::get('/dashboard/TALIWANG/GENERATOR/tambah','DataController@tambahtlwgenerator');
Route::post('/dashboard/TALIWANG/GENERATOR/store','DataController@storetlwgenerator');
Route::post('/dashboard/TALIWANG/GENERATOR/update','DataController@updatetlwgenerator');

Route::get('/dashboard/TALIWANG/RECTIFIER',['as' => 'tlw_rectifier', 'uses' =>'DataController@indextlwrectifier']);
Route::get('/dashboard/TALIWANG/RECTIFIER/tambah','DataController@tambahtlwrectifier');
Route::post('/dashboard/TALIWANG/RECTIFIER/store','DataController@storetlwrectifier');
Route::post('/dashboard/TALIWANG/RECTIFIER/update','DataController@updatetlwrectifier');

Route::get('/dashboard/TALIWANG/BATTERE',['as' => 'tlw_battere', 'uses' =>'DataController@indextlwbattere']);
Route::get('/dashboard/TALIWANG/BATTERE/tambah','DataController@tambahtlwbattere');
Route::post('/dashboard/TALIWANG/BATTERE/store','DataController@storetlwbattere');
Route::post('/dashboard/TALIWANG/BATTERE/update','DataController@updatetlwbattere');

//
Route::get('/dashboard/BANGIL/PLN',['as' => 'bnl_pln', 'uses' =>'DataController@indexbnlpln']);
Route::get('/dashboard/BANGIL/PLN/tambah','DataController@tambahbnlpln');
Route::post('/dashboard/BANGIL/PLN/store','DataController@storebnlpln');
Route::post('/dashboard/BANGIL/PLN/update','DataController@updatebnlpln');

Route::get('/dashboard/BANGIL/AC',['as' => 'bnl_ac', 'uses' =>'DataController@indexbnlac']);
Route::get('/dashboard/BANGIL/AC/tambah','DataController@tambahbnlac');
Route::post('/dashboard/BANGIL/AC/store','DataController@storebnlac');
Route::post('/dashboard/BANGIL/AC/update','DataController@updatebnlac');

Route::get('/dashboard/BANGIL/GENERATOR',['as' => 'bnl_generator', 'uses' =>'DataController@indexbnlgenerator']);
Route::get('/dashboard/BANGIL/GENERATOR/tambah','DataController@tambahbnlgenerator');
Route::post('/dashboard/BANGIL/GENERATOR/store','DataController@storebnlgenerator');
Route::post('/dashboard/BANGIL/GENERATOR/update','DataController@updatebnlgenerator');

Route::get('/dashboard/BANGIL/RECTIFIER',['as' => 'bnl_rectifier', 'uses' =>'DataController@indexbnlrectifier']);
Route::get('/dashboard/BANGIL/RECTIFIER/tambah','DataController@tambahbnlrectifier');
Route::post('/dashboard/BANGIL/RECTIFIER/store','DataController@storebnlrectifier');
Route::post('/dashboard/BANGIL/RECTIFIER/update','DataController@updatebnlrectifier');

Route::get('/dashboard/BANGIL/BATTERE',['as' => 'bnl_battere', 'uses' =>'DataController@indexbnlbattere']);
Route::get('/dashboard/BANGIL/BATTERE/tambah','DataController@tambahbnlbattere');
Route::post('/dashboard/BANGIL/BATTERE/store','DataController@storebnlbattere');
Route::post('/dashboard/BANGIL/BATTERE/update','DataController@updatebnlbattere');

//
Route::get('/dashboard/GENDING/PLN',['as' => 'gnd_pln', 'uses' =>'DataController@indexgndpln']);
Route::get('/dashboard/GENDING/PLN/tambah','DataController@tambahgndpln');
Route::post('/dashboard/GENDING/PLN/store','DataController@storegndpln');
Route::post('/dashboard/GENDING/PLN/update','DataController@updategndpln');

Route::get('/dashboard/GENDING/AC',['as' => 'gnd_ac', 'uses' =>'DataController@indexgndac']);
Route::get('/dashboard/GENDING/AC/tambah','DataController@tambahgndac');
Route::post('/dashboard/GENDING/AC/store','DataController@storegndac');
Route::post('/dashboard/GENDING/AC/update','DataController@updategndac');

Route::get('/dashboard/GENDING/GENERATOR',['as' => 'gnd_generator', 'uses' =>'DataController@indexgndgenerator']);
Route::get('/dashboard/GENDING/GENERATOR/tambah','DataController@tambahgndgenerator');
Route::post('/dashboard/GENDING/GENERATOR/store','DataController@storegndgenerator');
Route::post('/dashboard/GENDING/GENERATOR/update','DataController@updategndgenerator');

Route::get('/dashboard/GENDING/RECTIFIER',['as' => 'gnd_rectifier', 'uses' =>'DataController@indexgndrectifier']);
Route::get('/dashboard/GENDING/RECTIFIER/tambah','DataController@tambahgndrectifier');
Route::post('/dashboard/GENDING/RECTIFIER/store','DataController@storegndrectifier');
Route::post('/dashboard/GENDING/RECTIFIER/update','DataController@updategndrectifier');

Route::get('/dashboard/GENDING/BATTERE',['as' => 'gnd_battere', 'uses' =>'DataController@indexgndbattere']);
Route::get('/dashboard/GENDING/BATTERE/tambah','DataController@tambahgndbattere');
Route::post('/dashboard/GENDING/BATTERE/store','DataController@storegndbattere');
Route::post('/dashboard/GENDING/BATTERE/update','DataController@updategndbattere');

//
Route::get('/dashboard/GONDANG WETAN/PLN',['as' => 'gdw_pln', 'uses' =>'DataController@indexgdwpln']);
Route::get('/dashboard/GONDANG WETAN/PLN/tambah','DataController@tambahgdwpln');
Route::post('/dashboard/GONDANG WETAN/PLN/store','DataController@storegdwpln');
Route::post('/dashboard/GONDANG WETAN/PLN/update','DataController@updategdwpln');

Route::get('/dashboard/GONDANG WETAN/AC',['as' => 'gdw_ac', 'uses' =>'DataController@indexgdwac']);
Route::get('/dashboard/GONDANG WETAN/AC/tambah','DataController@tambahgdwac');
Route::post('/dashboard/GONDANG WETAN/AC/store','DataController@storegdwac');
Route::post('/dashboard/GONDANG WETAN/AC/update','DataController@updategdwac');

Route::get('/dashboard/GONDANG WETAN/GENERATOR',['as' => 'gdw_generator', 'uses' =>'DataController@indexgdwgenerator']);
Route::get('/dashboard/GONDANG WETAN/GENERATOR/tambah','DataController@tambahgdwgenerator');
Route::post('/dashboard/GONDANG WETAN/GENERATOR/store','DataController@storegdwgenerator');
Route::post('/dashboard/GONDANG WETAN/GENERATOR/update','DataController@updategdwgenerator');

Route::get('/dashboard/GONDANG WETAN/RECTIFIER',['as' => 'gdw_rectifier', 'uses' =>'DataController@indexgdwrectifier']);
Route::get('/dashboard/GONDANG WETAN/RECTIFIER/tambah','DataController@tambahgdwrectifier');
Route::post('/dashboard/GONDANG WETAN/RECTIFIER/store','DataController@storegdwrectifier');
Route::post('/dashboard/GONDANG WETAN/RECTIFIER/update','DataController@updategdwrectifier');

Route::get('/dashboard/GONDANG WETAN/BATTERE',['as' => 'gdw_battere', 'uses' =>'DataController@indexgdwbattere']);
Route::get('/dashboard/GONDANG WETAN/BATTERE/tambah','DataController@tambahgdwbattere');
Route::post('/dashboard/GONDANG WETAN/BATTERE/store','DataController@storegdwbattere');
Route::post('/dashboard/GONDANG WETAN/BATTERE/update','DataController@updategdwbattere');

//
Route::get('/dashboard/GRATI/PLN',['as' => 'gra_pln', 'uses' =>'DataController@indexgrapln']);
Route::get('/dashboard/GRATI/PLN/tambah','DataController@tambahgrapln');
Route::post('/dashboard/GRATI/PLN/store','DataController@storegrapln');
Route::post('/dashboard/GRATI/PLN/update','DataController@updategrapln');

Route::get('/dashboard/GRATI/AC',['as' => 'gra_ac', 'uses' =>'DataController@indexgraac']);
Route::get('/dashboard/GRATI/AC/tambah','DataController@tambahgraac');
Route::post('/dashboard/GRATI/AC/store','DataController@storegraac');
Route::post('/dashboard/GRATI/AC/update','DataController@updategraac');

Route::get('/dashboard/GRATI/GENERATOR',['as' => 'gra_generator', 'uses' =>'DataController@indexgragenerator']);
Route::get('/dashboard/GRATI/GENERATOR/tambah','DataController@tambahgragenerator');
Route::post('/dashboard/GRATI/GENERATOR/store','DataController@storegragenerator');
Route::post('/dashboard/GRATI/GENERATOR/update','DataController@updategragenerator');

Route::get('/dashboard/GRATI/RECTIFIER',['as' => 'gra_rectifier', 'uses' =>'DataController@indexgrarectifier']);
Route::get('/dashboard/GRATI/RECTIFIER/tambah','DataController@tambahgrarectifier');
Route::post('/dashboard/GRATI/RECTIFIER/store','DataController@storegrarectifier');
Route::post('/dashboard/GRATI/RECTIFIER/update','DataController@updategrarectifier');

Route::get('/dashboard/GRATI/BATTERE',['as' => 'gra_battere', 'uses' =>'DataController@indexgrabattere']);
Route::get('/dashboard/GRATI/BATTERE/tambah','DataController@tambahgrabattere');
Route::post('/dashboard/GRATI/BATTERE/store','DataController@storegrabattere');
Route::post('/dashboard/GRATI/BATTERE/update','DataController@updategrabattere');

//
Route::get('/dashboard/JATIROTO/PLN',['as' => 'jto_pln', 'uses' =>'DataController@indexjtopln']);
Route::get('/dashboard/JATIROTO/PLN/tambah','DataController@tambahjtopln');
Route::post('/dashboard/JATIROTO/PLN/store','DataController@storejtopln');
Route::post('/dashboard/JATIROTO/PLN/update','DataController@updatejtopln');

Route::get('/dashboard/JATIROTO/AC',['as' => 'jto_ac', 'uses' =>'DataController@indexjtoac']);
Route::get('/dashboard/JATIROTO/AC/tambah','DataController@tambahjtoac');
Route::post('/dashboard/JATIROTO/AC/store','DataController@storejtoac');
Route::post('/dashboard/JATIROTO/AC/update','DataController@updatejtoac');

Route::get('/dashboard/JATIROTO/GENERATOR',['as' => 'jto_generator', 'uses' =>'DataController@indexjtogenerator']);
Route::get('/dashboard/JATIROTO/GENERATOR/tambah','DataController@tambahjtogenerator');
Route::post('/dashboard/JATIROTO/GENERATOR/store','DataController@storejtogenerator');
Route::post('/dashboard/JATIROTO/GENERATOR/update','DataController@updatejtogenerator');

Route::get('/dashboard/JATIROTO/RECTIFIER',['as' => 'jto_rectifier', 'uses' =>'DataController@indexjtorectifier']);
Route::get('/dashboard/JATIROTO/RECTIFIER/tambah','DataController@tambahjtorectifier');
Route::post('/dashboard/JATIROTO/RECTIFIER/store','DataController@storejtorectifier');
Route::post('/dashboard/JATIROTO/RECTIFIER/update','DataController@updatejtorectifier');

Route::get('/dashboard/JATIROTO/BATTERE',['as' => 'jto_battere', 'uses' =>'DataController@indexjtobattere']);
Route::get('/dashboard/JATIROTO/BATTERE/tambah','DataController@tambahjtobattere');
Route::post('/dashboard/JATIROTO/BATTERE/store','DataController@storejtobattere');
Route::post('/dashboard/JATIROTO/BATTERE/update','DataController@updatejtobattere');

//
Route::get('/dashboard/KLAKAH/PLN',['as' => 'kkh_pln', 'uses' =>'DataController@indexkkhpln']);
Route::get('/dashboard/KLAKAH/PLN/tambah','DataController@tambahkkhpln');
Route::post('/dashboard/KLAKAH/PLN/store','DataController@storekkhpln');
Route::post('/dashboard/KLAKAH/PLN/update','DataController@updatekkhpln');

Route::get('/dashboard/KLAKAH/AC',['as' => 'kkh_ac', 'uses' =>'DataController@indexkkhac']);
Route::get('/dashboard/KLAKAH/AC/tambah','DataController@tambahkkhac');
Route::post('/dashboard/KLAKAH/AC/store','DataController@storekkhac');
Route::post('/dashboard/KLAKAH/AC/update','DataController@updatekkhac');

Route::get('/dashboard/KLAKAH/GENERATOR',['as' => 'kkh_generator', 'uses' =>'DataController@indexkkhgenerator']);
Route::get('/dashboard/KLAKAH/GENERATOR/tambah','DataController@tambahkkhgenerator');
Route::post('/dashboard/KLAKAH/GENERATOR/store','DataController@storekkhgenerator');
Route::post('/dashboard/KLAKAH/GENERATOR/update','DataController@updatekkhgenerator');

Route::get('/dashboard/KLAKAH/RECTIFIER',['as' => 'kkh_rectifier', 'uses' =>'DataController@indexkkhrectifier']);
Route::get('/dashboard/KLAKAH/RECTIFIER/tambah','DataController@tambahkkhrectifier');
Route::post('/dashboard/KLAKAH/RECTIFIER/store','DataController@storekkhrectifier');
Route::post('/dashboard/KLAKAH/RECTIFIER/update','DataController@updatekkhrectifier');

Route::get('/dashboard/KLAKAH/BATTERE',['as' => 'kkh_battere', 'uses' =>'DataController@indexkkhbattere']);
Route::get('/dashboard/KLAKAH/BATTERE/tambah','DataController@tambahkkhbattere');
Route::post('/dashboard/KLAKAH/BATTERE/store','DataController@storekkhbattere');
Route::post('/dashboard/KLAKAH/BATTERE/update','DataController@updatekkhbattere');

//
Route::get('/dashboard/KRAKSAAN/PLN',['as' => 'krz_pln', 'uses' =>'DataController@indexkrzpln']);
Route::get('/dashboard/KRAKSAAN/PLN/tambah','DataController@tambahkrzpln');
Route::post('/dashboard/KRAKSAAN/PLN/store','DataController@storekrzpln');
Route::post('/dashboard/KRAKSAAN/PLN/update','DataController@updatekrzpln');

Route::get('/dashboard/KRAKSAAN/AC',['as' => 'krz_ac', 'uses' =>'DataController@indexkrzac']);
Route::get('/dashboard/KRAKSAAN/AC/tambah','DataController@tambahkrzac');
Route::post('/dashboard/KRAKSAAN/AC/store','DataController@storekrzac');
Route::post('/dashboard/KRAKSAAN/AC/update','DataController@updatekrzac');

Route::get('/dashboard/KRAKSAAN/GENERATOR',['as' => 'krz_generator', 'uses' =>'DataController@indexkrzgenerator']);
Route::get('/dashboard/KRAKSAAN/GENERATOR/tambah','DataController@tambahkrzgenerator');
Route::post('/dashboard/KRAKSAAN/GENERATOR/store','DataController@storekrzgenerator');
Route::post('/dashboard/KRAKSAAN/GENERATOR/update','DataController@updatekrzgenerator');

Route::get('/dashboard/KRAKSAAN/RECTIFIER',['as' => 'krz_rectifier', 'uses' =>'DataController@indexkrzrectifier']);
Route::get('/dashboard/KRAKSAAN/RECTIFIER/tambah','DataController@tambahkrzrectifier');
Route::post('/dashboard/KRAKSAAN/RECTIFIER/store','DataController@storekrzrectifier');
Route::post('/dashboard/KRAKSAAN/RECTIFIER/update','DataController@updatekrzrectifier');

Route::get('/dashboard/KRAKSAAN/BATTERE',['as' => 'krz_battere', 'uses' =>'DataController@indexkrzbattere']);
Route::get('/dashboard/KRAKSAAN/BATTERE/tambah','DataController@tambahkrzbattere');
Route::post('/dashboard/KRAKSAAN/BATTERE/store','DataController@storekrzbattere');
Route::post('/dashboard/KRAKSAAN/BATTERE/update','DataController@updatekrzbattere');

//
Route::get('/dashboard/LECES/PLN',['as' => 'lce_pln', 'uses' =>'DataController@indexlcepln']);
Route::get('/dashboard/LECES/PLN/tambah','DataController@tambahlcepln');
Route::post('/dashboard/LECES/PLN/store','DataController@storelcepln');
Route::post('/dashboard/LECES/PLN/update','DataController@updatelcepln');

Route::get('/dashboard/LECES/AC',['as' => 'lce_ac', 'uses' =>'DataController@indexlceac']);
Route::get('/dashboard/LECES/AC/tambah','DataController@tambahlceac');
Route::post('/dashboard/LECES/AC/store','DataController@storelceac');
Route::post('/dashboard/LECES/AC/update','DataController@updatelceac');

Route::get('/dashboard/LECES/GENERATOR',['as' => 'lce_generator', 'uses' =>'DataController@indexlcegenerator']);
Route::get('/dashboard/LECES/GENERATOR/tambah','DataController@tambahlcegenerator');
Route::post('/dashboard/LECES/GENERATOR/store','DataController@storelcegenerator');
Route::post('/dashboard/LECES/GENERATOR/update','DataController@updatelcegenerator');

Route::get('/dashboard/LECES/RECTIFIER',['as' => 'lce_rectifier', 'uses' =>'DataController@indexlcerectifier']);
Route::get('/dashboard/LECES/RECTIFIER/tambah','DataController@tambahlcerectifier');
Route::post('/dashboard/LECES/RECTIFIER/store','DataController@storelcerectifier');
Route::post('/dashboard/LECES/RECTIFIER/update','DataController@updatelcerectifier');

Route::get('/dashboard/LECES/BATTERE',['as' => 'lce_battere', 'uses' =>'DataController@indexlcebattere']);
Route::get('/dashboard/LECES/BATTERE/tambah','DataController@tambahlcebattere');
Route::post('/dashboard/LECES/BATTERE/store','DataController@storelcebattere');
Route::post('/dashboard/LECES/BATTERE/update','DataController@updatelcebattere');

//
Route::get('/dashboard/LUMAJANG/PLN',['as' => 'lmj_pln', 'uses' =>'DataController@indexlmjpln']);
Route::get('/dashboard/LUMAJANG/PLN/tambah','DataController@tambahlmjpln');
Route::post('/dashboard/LUMAJANG/PLN/store','DataController@storelmjpln');
Route::post('/dashboard/LUMAJANG/PLN/update','DataController@updatelmjpln');

Route::get('/dashboard/LUMAJANG/AC',['as' => 'lmj_ac', 'uses' =>'DataController@indexlmjac']);
Route::get('/dashboard/LUMAJANG/AC/tambah','DataController@tambahlmjac');
Route::post('/dashboard/LUMAJANG/AC/store','DataController@storelmjac');
Route::post('/dashboard/LUMAJANG/AC/update','DataController@updatelmjac');

Route::get('/dashboard/LUMAJANG/GENERATOR',['as' => 'lmj_generator', 'uses' =>'DataController@indexlmjgenerator']);
Route::get('/dashboard/LUMAJANG/GENERATOR/tambah','DataController@tambahlmjgenerator');
Route::post('/dashboard/LUMAJANG/GENERATOR/store','DataController@storelmjgenerator');
Route::post('/dashboard/LUMAJANG/GENERATOR/update','DataController@updatelmjgenerator');

Route::get('/dashboard/LUMAJANG/RECTIFIER',['as' => 'lmj_rectifier', 'uses' =>'DataController@indexlmjrectifier']);
Route::get('/dashboard/LUMAJANG/RECTIFIER/tambah','DataController@tambahlmjrectifier');
Route::post('/dashboard/LUMAJANG/RECTIFIER/store','DataController@storelmjrectifier');
Route::post('/dashboard/LUMAJANG/RECTIFIER/update','DataController@updatelmjrectifier');

Route::get('/dashboard/LUMAJANG/BATTERE',['as' => 'lmj_battere', 'uses' =>'DataController@indexlmjbattere']);
Route::get('/dashboard/LUMAJANG/BATTERE/tambah','DataController@tambahlmjbattere');
Route::post('/dashboard/LUMAJANG/BATTERE/store','DataController@storelmjbattere');
Route::post('/dashboard/LUMAJANG/BATTERE/update','DataController@updatelmjbattere');

//
Route::get('/dashboard/NONGKOJAJAR/PLN',['as' => 'nja_pln', 'uses' =>'DataController@indexnjapln']);
Route::get('/dashboard/NONGKOJAJAR/PLN/tambah','DataController@tambahnjapln');
Route::post('/dashboard/NONGKOJAJAR/PLN/store','DataController@storenjapln');
Route::post('/dashboard/NONGKOJAJAR/PLN/update','DataController@updatenjapln');

Route::get('/dashboard/NONGKOJAJAR/AC',['as' => 'nja_ac', 'uses' =>'DataController@indexnjaac']);
Route::get('/dashboard/NONGKOJAJAR/AC/tambah','DataController@tambahnjaac');
Route::post('/dashboard/NONGKOJAJAR/AC/store','DataController@storenjaac');
Route::post('/dashboard/NONGKOJAJAR/AC/update','DataController@updatenjaac');

Route::get('/dashboard/NONGKOJAJAR/GENERATOR',['as' => 'nja_generator', 'uses' =>'DataController@indexnjagenerator']);
Route::get('/dashboard/NONGKOJAJAR/GENERATOR/tambah','DataController@tambahnjagenerator');
Route::post('/dashboard/NONGKOJAJAR/GENERATOR/store','DataController@storenjagenerator');
Route::post('/dashboard/NONGKOJAJAR/GENERATOR/update','DataController@updatenjagenerator');

Route::get('/dashboard/NONGKOJAJAR/RECTIFIER',['as' => 'nja_rectifier', 'uses' =>'DataController@indexnjarectifier']);
Route::get('/dashboard/NONGKOJAJAR/RECTIFIER/tambah','DataController@tambahnjarectifier');
Route::post('/dashboard/NONGKOJAJAR/RECTIFIER/store','DataController@storenjarectifier');
Route::post('/dashboard/NONGKOJAJAR/RECTIFIER/update','DataController@updatenjarectifier');

Route::get('/dashboard/NONGKOJAJAR/BATTERE',['as' => 'nja_battere', 'uses' =>'DataController@indexnjabattere']);
Route::get('/dashboard/NONGKOJAJAR/BATTERE/tambah','DataController@tambahnjabattere');
Route::post('/dashboard/NONGKOJAJAR/BATTERE/store','DataController@storenjabattere');
Route::post('/dashboard/NONGKOJAJAR/BATTERE/update','DataController@updatenjabattere');

//
Route::get('/dashboard/PAITON/PLN',['as' => 'ptn_pln', 'uses' =>'DataController@indexptnpln']);
Route::get('/dashboard/PAITON/PLN/tambah','DataController@tambahptnpln');
Route::post('/dashboard/PAITON/PLN/store','DataController@storeptnpln');
Route::post('/dashboard/PAITON/PLN/update','DataController@updateptnpln');

Route::get('/dashboard/PAITON/AC',['as' => 'ptn_ac', 'uses' =>'DataController@indexptnac']);
Route::get('/dashboard/PAITON/AC/tambah','DataController@tambahptnac');
Route::post('/dashboard/PAITON/AC/store','DataController@storeptnac');
Route::post('/dashboard/PAITON/AC/update','DataController@updateptnac');

Route::get('/dashboard/PAITON/GENERATOR',['as' => 'ptn_generator', 'uses' =>'DataController@indexptngenerator']);
Route::get('/dashboard/PAITON/GENERATOR/tambah','DataController@tambahptngenerator');
Route::post('/dashboard/PAITON/GENERATOR/store','DataController@storeptngenerator');
Route::post('/dashboard/PAITON/GENERATOR/update','DataController@updateptngenerator');

Route::get('/dashboard/PAITON/RECTIFIER',['as' => 'ptn_rectifier', 'uses' =>'DataController@indexptnrectifier']);
Route::get('/dashboard/PAITON/RECTIFIER/tambah','DataController@tambahptnrectifier');
Route::post('/dashboard/PAITON/RECTIFIER/store','DataController@storeptnrectifier');
Route::post('/dashboard/PAITON/RECTIFIER/update','DataController@updateptnrectifier');

Route::get('/dashboard/PAITON/BATTERE',['as' => 'ptn_battere', 'uses' =>'DataController@indexptnbattere']);
Route::get('/dashboard/PAITON/BATTERE/tambah','DataController@tambahptnbattere');
Route::post('/dashboard/PAITON/BATTERE/store','DataController@storeptnbattere');
Route::post('/dashboard/PAITON/BATTERE/update','DataController@updateptnbattere');

//
Route::get('/dashboard/PASIRIAN/PLN',['as' => 'pii_pln', 'uses' =>'DataController@indexpiipln']);
Route::get('/dashboard/PASIRIAN/PLN/tambah','DataController@tambahpiipln');
Route::post('/dashboard/PASIRIAN/PLN/store','DataController@storepiipln');
Route::post('/dashboard/PASIRIAN/PLN/update','DataController@updatepiipln');

Route::get('/dashboard/PASIRIAN/AC',['as' => 'pii_ac', 'uses' =>'DataController@indexpiiac']);
Route::get('/dashboard/PASIRIAN/AC/tambah','DataController@tambahpiiac');
Route::post('/dashboard/PASIRIAN/AC/store','DataController@storepiiac');
Route::post('/dashboard/PASIRIAN/AC/update','DataController@updatepiiac');

Route::get('/dashboard/PASIRIAN/GENERATOR',['as' => 'pii_generator', 'uses' =>'DataController@indexpiigenerator']);
Route::get('/dashboard/PASIRIAN/GENERATOR/tambah','DataController@tambahpiigenerator');
Route::post('/dashboard/PASIRIAN/GENERATOR/store','DataController@storepiigenerator');
Route::post('/dashboard/PASIRIAN/GENERATOR/update','DataController@updatepiigenerator');

Route::get('/dashboard/PASIRIAN/RECTIFIER',['as' => 'pii_rectifier', 'uses' =>'DataController@indexpiirectifier']);
Route::get('/dashboard/PASIRIAN/RECTIFIER/tambah','DataController@tambahpiirectifier');
Route::post('/dashboard/PASIRIAN/RECTIFIER/store','DataController@storepiirectifier');
Route::post('/dashboard/PASIRIAN/RECTIFIER/update','DataController@updatepiirectifier');

Route::get('/dashboard/PASIRIAN/BATTERE',['as' => 'pii_battere', 'uses' =>'DataController@indexpiibattere']);
Route::get('/dashboard/PASIRIAN/BATTERE/tambah','DataController@tambahpiibattere');
Route::post('/dashboard/PASIRIAN/BATTERE/store','DataController@storepiibattere');
Route::post('/dashboard/PASIRIAN/BATTERE/update','DataController@updatepiibattere');

//
Route::get('/dashboard/PASURUAN/PLN',['as' => 'psn_pln', 'uses' =>'DataController@indexpsnpln']);
Route::get('/dashboard/PASURUAN/PLN/tambah','DataController@tambahpsnpln');
Route::post('/dashboard/PASURUAN/PLN/store','DataController@storepsnpln');
Route::post('/dashboard/PASURUAN/PLN/update','DataController@updatepsnpln');

Route::get('/dashboard/PASURUAN/AC',['as' => 'psn_ac', 'uses' =>'DataController@indexpsnac']);
Route::get('/dashboard/PASURUAN/AC/tambah','DataController@tambahpsnac');
Route::post('/dashboard/PASURUAN/AC/store','DataController@storepsnac');
Route::post('/dashboard/PASURUAN/AC/update','DataController@updatepsnac');

Route::get('/dashboard/PASURUAN/GENERATOR',['as' => 'psn_generator', 'uses' =>'DataController@indexpsngenerator']);
Route::get('/dashboard/PASURUAN/GENERATOR/tambah','DataController@tambahpsngenerator');
Route::post('/dashboard/PASURUAN/GENERATOR/store','DataController@storepsngenerator');
Route::post('/dashboard/PASURUAN/GENERATOR/update','DataController@updatepsngenerator');

Route::get('/dashboard/PASURUAN/RECTIFIER',['as' => 'psn_rectifier', 'uses' =>'DataController@indexpsnrectifier']);
Route::get('/dashboard/PASURUAN/RECTIFIER/tambah','DataController@tambahpsnrectifier');
Route::post('/dashboard/PASURUAN/RECTIFIER/store','DataController@storepsnrectifier');
Route::post('/dashboard/PASURUAN/RECTIFIER/update','DataController@updatepsnrectifier');

Route::get('/dashboard/PASURUAN/BATTERE',['as' => 'psn_battere', 'uses' =>'DataController@indexpsnbattere']);
Route::get('/dashboard/PASURUAN/BATTERE/tambah','DataController@tambahpsnbattere');
Route::post('/dashboard/PASURUAN/BATTERE/store','DataController@storepsnbattere');
Route::post('/dashboard/PASURUAN/BATTERE/update','DataController@updatepsnbattere');

//
Route::get('/dashboard/PROBOLINGGO/PLN',['as' => 'pbl_pln', 'uses' =>'DataController@indexpblpln']);
Route::get('/dashboard/PROBOLINGGO/PLN/tambah','DataController@tambahpblpln');
Route::post('/dashboard/PROBOLINGGO/PLN/store','DataController@storepblpln');
Route::post('/dashboard/PROBOLINGGO/PLN/update','DataController@updatepblpln');

Route::get('/dashboard/PROBOLINGGO/AC',['as' => 'pbl_ac', 'uses' =>'DataController@indexpblac']);
Route::get('/dashboard/PROBOLINGGO/AC/tambah','DataController@tambahpblac');
Route::post('/dashboard/PROBOLINGGO/AC/store','DataController@storepblac');
Route::post('/dashboard/PROBOLINGGO/AC/update','DataController@updatepblac');

Route::get('/dashboard/PROBOLINGGO/GENERATOR',['as' => 'pbl_generator', 'uses' =>'DataController@indexpblgenerator']);
Route::get('/dashboard/PROBOLINGGO/GENERATOR/tambah','DataController@tambahpblgenerator');
Route::post('/dashboard/PROBOLINGGO/GENERATOR/store','DataController@storepblgenerator');
Route::post('/dashboard/PROBOLINGGO/GENERATOR/update','DataController@updatepblgenerator');

Route::get('/dashboard/PROBOLINGGO/RECTIFIER',['as' => 'pbl_rectifier', 'uses' =>'DataController@indexpblrectifier']);
Route::get('/dashboard/PROBOLINGGO/RECTIFIER/tambah','DataController@tambahpblrectifier');
Route::post('/dashboard/PROBOLINGGO/RECTIFIER/store','DataController@storepblrectifier');
Route::post('/dashboard/PROBOLINGGO/RECTIFIER/update','DataController@updatepblrectifier');

Route::get('/dashboard/PROBOLINGGO/BATTERE',['as' => 'pbl_battere', 'uses' =>'DataController@indexpblbattere']);
Route::get('/dashboard/PROBOLINGGO/BATTERE/tambah','DataController@tambahpblbattere');
Route::post('/dashboard/PROBOLINGGO/BATTERE/store','DataController@storepblbattere');
Route::post('/dashboard/PROBOLINGGO/BATTERE/update','DataController@updatepblbattere');

//
Route::get('/dashboard/SENDURO/PLN',['as' => 'sdo_pln', 'uses' =>'DataController@indexsdopln']);
Route::get('/dashboard/SENDURO/PLN/tambah','DataController@tambahsdopln');
Route::post('/dashboard/SENDURO/PLN/store','DataController@storesdopln');
Route::post('/dashboard/SENDURO/PLN/update','DataController@updatesdopln');

Route::get('/dashboard/SENDURO/AC',['as' => 'sdo_ac', 'uses' =>'DataController@indexsdoac']);
Route::get('/dashboard/SENDURO/AC/tambah','DataController@tambahsdoac');
Route::post('/dashboard/SENDURO/AC/store','DataController@storesdoac');
Route::post('/dashboard/SENDURO/AC/update','DataController@updatesdoac');

Route::get('/dashboard/SENDURO/GENERATOR',['as' => 'sdo_generator', 'uses' =>'DataController@indexsdogenerator']);
Route::get('/dashboard/SENDURO/GENERATOR/tambah','DataController@tambahsdogenerator');
Route::post('/dashboard/SENDURO/GENERATOR/store','DataController@storesdogenerator');
Route::post('/dashboard/SENDURO/GENERATOR/update','DataController@updatesdogenerator');

Route::get('/dashboard/SENDURO/RECTIFIER',['as' => 'sdo_rectifier', 'uses' =>'DataController@indexsdorectifier']);
Route::get('/dashboard/SENDURO/RECTIFIER/tambah','DataController@tambahsdorectifier');
Route::post('/dashboard/SENDURO/RECTIFIER/store','DataController@storesdorectifier');
Route::post('/dashboard/SENDURO/RECTIFIER/update','DataController@updatesdorectifier');

Route::get('/dashboard/SENDURO/BATTERE',['as' => 'sdo_battere', 'uses' =>'DataController@indexsdobattere']);
Route::get('/dashboard/SENDURO/BATTERE/tambah','DataController@tambahsdobattere');
Route::post('/dashboard/SENDURO/BATTERE/store','DataController@storesdobattere');
Route::post('/dashboard/SENDURO/BATTERE/update','DataController@updatesdobattere');

//
Route::get('/dashboard/SUKAPURA/PLN',['as' => 'skp_pln', 'uses' =>'DataController@indexskppln']);
Route::get('/dashboard/SUKAPURA/PLN/tambah','DataController@tambahskppln');
Route::post('/dashboard/SUKAPURA/PLN/store','DataController@storeskppln');
Route::post('/dashboard/SUKAPURA/PLN/update','DataController@updateskppln');

Route::get('/dashboard/SUKAPURA/AC',['as' => 'skp_ac', 'uses' =>'DataController@indexskpac']);
Route::get('/dashboard/SUKAPURA/AC/tambah','DataController@tambahskpac');
Route::post('/dashboard/SUKAPURA/AC/store','DataController@storeskpac');
Route::post('/dashboard/SUKAPURA/AC/update','DataController@updateskpac');

Route::get('/dashboard/SUKAPURA/GENERATOR',['as' => 'skp_generator', 'uses' =>'DataController@indexskpgenerator']);
Route::get('/dashboard/SUKAPURA/GENERATOR/tambah','DataController@tambahskpgenerator');
Route::post('/dashboard/SUKAPURA/GENERATOR/store','DataController@storeskpgenerator');
Route::post('/dashboard/SUKAPURA/GENERATOR/update','DataController@updateskpgenerator');

Route::get('/dashboard/SUKAPURA/RECTIFIER',['as' => 'skp_rectifier', 'uses' =>'DataController@indexskprectifier']);
Route::get('/dashboard/SUKAPURA/RECTIFIER/tambah','DataController@tambahskprectifier');
Route::post('/dashboard/SUKAPURA/RECTIFIER/store','DataController@storeskprectifier');
Route::post('/dashboard/SUKAPURA/RECTIFIER/update','DataController@updateskprectifier');

Route::get('/dashboard/SUKAPURA/BATTERE',['as' => 'skp_battere', 'uses' =>'DataController@indexskpbattere']);
Route::get('/dashboard/SUKAPURA/BATTERE/tambah','DataController@tambahskpbattere');
Route::post('/dashboard/SUKAPURA/BATTERE/store','DataController@storeskpbattere');
Route::post('/dashboard/SUKAPURA/BATTERE/update','DataController@updateskpbattere');

//
Route::get('/dashboard/TEMPEH/PLN',['as' => 'tph_pln', 'uses' =>'DataController@indextphpln']);
Route::get('/dashboard/TEMPEH/PLN/tambah','DataController@tambahtphpln');
Route::post('/dashboard/TEMPEH/PLN/store','DataController@storetphpln');
Route::post('/dashboard/TEMPEH/PLN/update','DataController@updatetphpln');

Route::get('/dashboard/TEMPEH/AC',['as' => 'tph_ac', 'uses' =>'DataController@indextphac']);
Route::get('/dashboard/TEMPEH/AC/tambah','DataController@tambahtphac');
Route::post('/dashboard/TEMPEH/AC/store','DataController@storetphac');
Route::post('/dashboard/TEMPEH/AC/update','DataController@updatetphac');

Route::get('/dashboard/TEMPEH/GENERATOR',['as' => 'tph_generator', 'uses' =>'DataController@indextphgenerator']);
Route::get('/dashboard/TEMPEH/GENERATOR/tambah','DataController@tambahtphgenerator');
Route::post('/dashboard/TEMPEH/GENERATOR/store','DataController@storetphgenerator');
Route::post('/dashboard/TEMPEH/GENERATOR/update','DataController@updatetphgenerator');

Route::get('/dashboard/TEMPEH/RECTIFIER',['as' => 'tph_rectifier', 'uses' =>'DataController@indextphrectifier']);
Route::get('/dashboard/TEMPEH/RECTIFIER/tambah','DataController@tambahtphrectifier');
Route::post('/dashboard/TEMPEH/RECTIFIER/store','DataController@storetphrectifier');
Route::post('/dashboard/TEMPEH/RECTIFIER/update','DataController@updatetphrectifier');

Route::get('/dashboard/TEMPEH/BATTERE',['as' => 'tph_battere', 'uses' =>'DataController@indextphbattere']);
Route::get('/dashboard/TEMPEH/BATTERE/tambah','DataController@tambahtphbattere');
Route::post('/dashboard/TEMPEH/BATTERE/store','DataController@storetphbattere');
Route::post('/dashboard/TEMPEH/BATTERE/update','DataController@updatetphbattere');

//
Route::get('/dashboard/TONGAS/PLN',['as' => 'tgs_pln', 'uses' =>'DataController@indextgspln']);
Route::get('/dashboard/TONGAS/PLN/tambah','DataController@tambahtgspln');
Route::post('/dashboard/TONGAS/PLN/store','DataController@storetgspln');
Route::post('/dashboard/TONGAS/PLN/update','DataController@updatetgspln');

Route::get('/dashboard/TONGAS/AC',['as' => 'tgs_ac', 'uses' =>'DataController@indextgsac']);
Route::get('/dashboard/TONGAS/AC/tambah','DataController@tambahtgsac');
Route::post('/dashboard/TONGAS/AC/store','DataController@storetgsac');
Route::post('/dashboard/TONGAS/AC/update','DataController@updatetgsac');

Route::get('/dashboard/TONGAS/GENERATOR',['as' => 'tgs_generator', 'uses' =>'DataController@indextgsgenerator']);
Route::get('/dashboard/TONGAS/GENERATOR/tambah','DataController@tambahtgsgenerator');
Route::post('/dashboard/TONGAS/GENERATOR/store','DataController@storetgsgenerator');
Route::post('/dashboard/TONGAS/GENERATOR/update','DataController@updatetgsgenerator');

Route::get('/dashboard/TONGAS/RECTIFIER',['as' => 'tgs_rectifier', 'uses' =>'DataController@indextgsrectifier']);
Route::get('/dashboard/TONGAS/RECTIFIER/tambah','DataController@tambahtgsrectifier');
Route::post('/dashboard/TONGAS/RECTIFIER/store','DataController@storetgsrectifier');
Route::post('/dashboard/TONGAS/RECTIFIER/update','DataController@updatetgsrectifier');

Route::get('/dashboard/TONGAS/BATTERE',['as' => 'tgs_battere', 'uses' =>'DataController@indextgsbattere']);
Route::get('/dashboard/TONGAS/BATTERE/tambah','DataController@tambahtgsbattere');
Route::post('/dashboard/TONGAS/BATTERE/store','DataController@storetgsbattere');
Route::post('/dashboard/TONGAS/BATTERE/update','DataController@updatetgsbattere');

//
Route::get('/dashboard/YOSOWILANGUN/PLN',['as' => 'ysn_pln', 'uses' =>'DataController@indexysnpln']);
Route::get('/dashboard/YOSOWILANGUN/PLN/tambah','DataController@tambahysnpln');
Route::post('/dashboard/YOSOWILANGUN/PLN/store','DataController@storeysnpln');
Route::post('/dashboard/YOSOWILANGUN/PLN/update','DataController@updateysnpln');

Route::get('/dashboard/YOSOWILANGUN/AC',['as' => 'ysn_ac', 'uses' =>'DataController@indexysnac']);
Route::get('/dashboard/YOSOWILANGUN/AC/tambah','DataController@tambahysnac');
Route::post('/dashboard/YOSOWILANGUN/AC/store','DataController@storeysnac');
Route::post('/dashboard/YOSOWILANGUN/AC/update','DataController@updateysnac');

Route::get('/dashboard/YOSOWILANGUN/GENERATOR',['as' => 'ysn_generator', 'uses' =>'DataController@indexysngenerator']);
Route::get('/dashboard/YOSOWILANGUN/GENERATOR/tambah','DataController@tambahysngenerator');
Route::post('/dashboard/YOSOWILANGUN/GENERATOR/store','DataController@storeysngenerator');
Route::post('/dashboard/YOSOWILANGUN/GENERATOR/update','DataController@updateysngenerator');

Route::get('/dashboard/YOSOWILANGUN/RECTIFIER',['as' => 'ysn_rectifier', 'uses' =>'DataController@indexysnrectifier']);
Route::get('/dashboard/YOSOWILANGUN/RECTIFIER/tambah','DataController@tambahysnrectifier');
Route::post('/dashboard/YOSOWILANGUN/RECTIFIER/store','DataController@storeysnrectifier');
Route::post('/dashboard/YOSOWILANGUN/RECTIFIER/update','DataController@updateysnrectifier');

Route::get('/dashboard/YOSOWILANGUN/BATTERE',['as' => 'ysn_battere', 'uses' =>'DataController@indexysnbattere']);
Route::get('/dashboard/YOSOWILANGUN/BATTERE/tambah','DataController@tambahysnbattere');
Route::post('/dashboard/YOSOWILANGUN/BATTERE/store','DataController@storeysnbattere');
Route::post('/dashboard/YOSOWILANGUN/BATTERE/update','DataController@updateysnbattere');