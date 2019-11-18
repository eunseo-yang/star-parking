import React from "react";
import Head from "next/head";
import styled, { css } from "styled-components";
import Search from "../components/molecules/Search";

export default function Write() {
  return (
    <Wrapper>
      <Head>
        <title>Sign Up</title>
      </Head>
      <Search></Search>
      리뷰작성페이지
    </Wrapper>
  );
}

const Wrapper = styled.div`
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: center;
`;
