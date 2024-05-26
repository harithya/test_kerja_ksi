SELECT * FROM tmatakuliah
WHERE KodeMK NOT IN (
  SELECT KodeMK FROM tnilai
);
