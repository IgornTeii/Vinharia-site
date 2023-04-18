<section class="catalogo">
	<h2>Nossos vinhos</h2>
	<div class="grid">
		<div class="card">
			<img src="img/vinho-tinto.jpg" alt="Garrafa de vinho tinto">
			<h3>Vinho Tinto</h3>
			<p class="preco">R$ 59,90</p>
			<p class="descricao">Vinho tinto encorpado, perfeito para acompanhar carnes vermelhas.</p>
			<button class="comprar">Comprar agora</button>
		</div>
		<div class="card">
			<img src="img/vinho-branco.jpg" alt="Garrafa de vinho branco">
			<h3>Vinho Branco</h3>
			<p class="preco">R$ 49,90</p>
			<p class="descricao">Vinho branco leve e refrescante, ótimo para acompanhar frutos do mar.</p>
			<button class="comprar">Comprar agora</button>
		</div>
		<div class="card">
			<img src="img/vinho-rosa.jpg" alt="Garrafa de vinho rosé">
			<h3>Vinho Rosé</h3>
			<p class="preco-promocao">R$ 29,90 <span class="preco-antigo">R$ 39,90</span></p>
			<p class="descricao">Vinho rosé delicado, perfeito para um happy hour descontraído.</p>
			<button class="comprar">Comprar agora</button>
		</div>
		<div class="card">
			<img src="img/vinho-porto.jpg" alt="Garrafa de vinho do Porto">
			<h3>Vinho do Porto</h3>
			<p class="preco">R$ 99,90</p>
			<p class="descricao">Vinho do Porto encorpado e aromático, ideal para sobremesas.</p>
			<button class="comprar">Comprar agora</button>
		</div>
	</div>
</section>

<style>
.catalogo {
	background-color: #F4D03F;
	color: #000;
	padding: 40px;
}

.catalogo h2 {
	text-align: center;
	margin-bottom: 40px;
}

.grid {
	display: grid;
	grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
	grid-gap: 40px;
}

.card {
	background-color: #FFF;
	padding: 20px;
	border-radius: 5px;
	box-shadow: 0px 5px 10px rgba(0,0,0,0.2);
}

.card img {
	width: 100%;
	height: 200px;
	object-fit: cover;
	margin-bottom: 20px;
}

.card h3 {
	font-size: 24px;
	margin-bottom: 10px;
}

.preco {
	font-size: 20px;
	font-weight: bold;
	margin-bottom: 10px;
}

.preco-promocao {
	position: relative;
}

.preco-promocao .preco-antigo {
	position: absolute;
	top: 0;
	right: 0;
	font-size: 14px;
	color: #999;
	text-decoration: line-through;
}

.descricao {
	font-size: 16
