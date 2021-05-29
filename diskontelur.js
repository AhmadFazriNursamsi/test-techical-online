const telur = (angka) => {
	let pembagi = 0;
	for(let i=2; i <= angka; i++)
	{
		if (angka%i == 0) {
			pembagi++
		}
	}
	if (pembagi == 2){
		console.log("Bonus Telor di tanggal Prima : "angka+2)
	}else {
		console.log("Bonus Telordi tanggal Non Prima : ")
	}
}