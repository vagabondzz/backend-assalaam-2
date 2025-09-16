<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'MEMBER';

    protected $primaryKey = 'MEMBER_ID';

    public $timestamps = false;

    public $incrementing = false;

    protected $keyType = 'string';
    protected $connection = 'sqlsrv';

    protected $fillable = [
        'MEMBER_ID',
        'IS_TRADER',
        'MEMBER_CARD_NO',
        'MEMBER_NAME',
        'MEMBER_IS_WNI',
        'MEMBER_PLACE_OF_BIRTH',
        'MEMBER_DATE_OF_BIRTH',
        'MEMBER_KTP_NO',
        'MEMBER_SEX',
        'MEMBER_ADDRESS',
        'MEMBER_KECAMATAN',
        'MEMBER_KOTA',
        'MEMBER_RT',
        'MEMBER_RW',
        'MEMBER_POST_CODE',
        'MEMBER_JML_TANGGUNGAN',
        'MEMBER_PENDAPATAN',
        'MEMBER_TELP',
        'MEMBER_IS_MARRIED',
        'MEMBER_IS_MAIN',
        'MEMBER_REGISTERED_DATE',
        'MEMBER_GROMEMBER_ID',
        'MEMBER_GROMEMBER_UNT_ID',
        'MEMBER_IS_VALID',
        'MEMBER_IS_ACTIVE',
        'DATE_CREATE',
        'DATE_MODIFY',
        'MEMBER_TOP',
        'MEMBER_PLAFON',
        'MEMBER_LEAD_TIME',
        'MEMBER_POIN',
        'REF$TIPE_PEMBAYARAN_ID',
        'MEMBER_ACTIVASI_ID',
        'MEMBER_KELUARGA_ID',
        'REF$DISC_MEMBER_ID',
        'REF$GRUP_MEMBER_ID',
        'REF$TIPE_MEMBER_ID',
        'REF$AGAMA_ID',
        'MEMBER_REK_PIUTANG_ID',
        'MEMBER_KUPON',
        'MEMBER_FAX',
        'MEMBER_ACTIVE_FROM',
        'MEMBER_ACTIVE_TO',
        'MEMBER_NPWP',
        'MEMBER_IS_DEFAULT',
        'MEMBER_IS_PKP',
        'USER_CREATE',
        'USER_MODIFY',
        'ISMAGIC',
        'ISWEB',
    ];

    public function transaksi()
    {
        return $this->hasMany(Transaksi::class, 'MEMBER_ID', 'MEMBER_ID');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'member_id', 'MEMBER_ID');
    }
}
