import React from "react";
import Head from "next/head";
import Link from "next/link";
import Nav from "../components/molecules/nav/home";
import Search from "../components/molecules/search/search";
import CircleBtn from "../components/atoms/Button/home/CircleButton";

export default function Home() {
  return (
    <>
      <Head>
        <title>Home</title>
        <link rel="icon" href="/favicon.ico" />
      </Head>
      <Nav></Nav>
      <Search></Search>
      <img
        src="http://cdn.ppomppu.co.kr/zboard/data3/2014/1111/m_1415676096_%C0%CC%B4%EB%BF%AA.png"
        width="100%"
        height="90%"
      ></img>
      <Link href="parking-lot-list">
        <a>
          <CircleBtn bottom="8rem">★</CircleBtn>
        </a>
      </Link>
      <Link href="write">
        <a>
          <CircleBtn bottom="3rem">+</CircleBtn>
        </a>
      </Link>
    </>
  );
}
