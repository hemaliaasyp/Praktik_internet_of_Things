import MySQLdb

import time
import datetime
from datetime import datetime
import random

db = MySQLdb.connect("localhost", "root", "", "smarthome")
cursor = db.cursor()

sql2 = cursor.execute("select count(*) from tb_sensor")
data = cursor.fetchone()

jml = data[0]
w = 1

# PILIH DEVICE
print("----- Pilih Device -----")
while w < jml+1:
    z = str(w)
    sql = cursor.execute(
        "select nama_objek_sensor from tb_sensor where id_sensor ='" + z + "'")
    nama_objek_sensor = cursor.fetchone()
    print(w, str(nama_objek_sensor[0]))
    w += 1

nama_objek_sensor = str(input("Pilih Device : "))

# PILIH SENSOR
print("\n----- Pilih Sensor -----")
print("1.Suhu")
print("2.Kelembapan")

sensor = int(input("Pilih Sensor :"))
waktu_cek = input("Masukkan Waktu (menit) : ")
total_cek = input("Masukkan Total Cek : ")

id_sensor = nama_objek_sensor[0]

# SENSOR SUHU
if sensor == 1:
    pilih_sensor = 'sensor1'
    nilai = 0
    ttc = int(total_cek)
    wtc = int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max:
        suhu = str(random.randint(10, 37))
        t_end = time.time() + 60 * wtc
        v = 0
        tb_suhu = []

        while time.time() < t_end:
            print("-----")
            v += 1

        waktu = str(datetime.now())
        input_suhu = id_sensor, suhu, waktu
        tb_suhu.append(input_suhu)
        sq = "insert into " + pilih_sensor + \
            " (id_sensor, sensor1, Waktu) values (%s,%s,%s)"
        input = cursor.executemany(sq, tb_suhu)
        print("BERHASIL", tb_suhu)

        nilai += 1

# SENSOR KELEMBAPAN
if sensor == 2:
    pilih_sensor = 'sensor2'
    nilai = 0
    ttc = int(total_cek)
    wtc = int(waktu_cek)
    nilai_max = ttc
    while nilai < nilai_max:
        kelembapan = str(random.randint(20, 60))
        t_end = time.time() + 60 * wtc
        v = 0
        tb_kelembapan = []

        while time.time() < t_end:
            print("-----")
            v += 1

        waktu = str(datetime.now())
        input_kelembapan = id_sensor, kelembapan, waktu
        tb_kelembapan.append(input_kelembapan)
        sq = "insert into " + pilih_sensor + \
            " (id_sensor, sensor2, Waktu) values (%s,%s,%s)"
        input = cursor.executemany(sq, tb_kelembapan)
        print("BERHASIL", tb_kelembapan)

        nilai += 1

db.commit()
db.close()
