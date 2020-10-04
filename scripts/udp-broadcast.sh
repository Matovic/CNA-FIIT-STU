#! /bin/csh

set i = 1

while ($i)
	echo -n "Do prehliadaca zadaj IP adresu zdroja, odkial tento datagram prisiel. Pristupove heslo je v inej sprave poslanej na port z dynamickeho rozsahu"  | socat - udp-datagram:192.168.100.255:65532,broadcast

	echo -n "To co cely cas hladate sa nachadzalo cely cas vo vasom vnutri" | socat - udp-datagram:192.168.100.255:1841,broadcast

	echo -n "Heslo na Web je posledny oktet cielovej ip adresy v binarnom tvare" | socat - udp-datagram:192.168.100.255:64444,broadcast

	echo -n "Pre istotu skontrolujte ci je nejake cdcko vo vasom pocitaci" | socat - udp-datagram:192.168.100.255:4544,broadcast

	sleep 2
end


