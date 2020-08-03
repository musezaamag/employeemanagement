โจทย์
1. เขียน REST API ด้วย laravel มี database เป็น sql โดยมี routes ดังนี้
  GET /employees รับข้อมูลพนักงานทั้งหมด
  GET /employees/{id} รับข้อมูลพนักงานที่ id
  POST /employees เพิ่มข้อมูลพนักงาน
  PUT /employees/{id} แก้ไขข้อมูลพนักงานที่ id
  DELETE /employees/{id} ลบข้อมูลพนักงานที่ id
โดยพนักงานมีข้อมูล ชื่อ-นามสกุล, อายุ, วันเกิด, ตำแหน่ง
2. สร้างหน้าเว็บที่มี data table แสดงข้อมูลพนักงาน สามารถเพิ่ม แก้ไข ลบ ได้ในหน้าเดียว
ด้วย API จากข้อ 1.
--** ส่งเป็นไฟล์ zip project laravel **--

NEVER SLEEP CO., Ltd.
184 Tumbon Suthep,
Amphor Mueang Chiang Mai, Chiang Mai 50200
Tel: 0824518850         
