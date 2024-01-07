import { SVGAttributes } from 'react';
import MeuSVG from '../../assets/logo_shield_team_bjj_color.svg';

interface LogoShieldTeamProps{
	className?: string
}

export default function LogoShieldTeam({className}: LogoShieldTeamProps, props: SVGAttributes<SVGElement>) {
	return (
		<img className={className} src={MeuSVG} alt="Meu SVG" />
	);
}
