# Framer — Refero Style

- Refero URL: https://styles.refero.design/style/242db326-a6f3-482a-b12e-5e7f8af94981
- Site URL: https://www.framer.com
- ID: 242db326-a6f3-482a-b12e-5e7f8af94981
- Theme: dark
- Industry: design
- Created: 2026-04-29T00:26:17.096Z
- Ranks: newest: 891, popular: 1205, trending: 1270

> Deep Space Command

## Description

Framer's aesthetic is a high-contrast digital canvas, emphasizing bold typography and a deep, immersive dark mode. The dominant #000000 background provides a stark stage for crisp #FFFFFF text, interrupted by precise, high-chroma electric blues (#0099FF, #0055FF) that pulse like indicator lights on active elements. Subtle surface variations in near-black (#080808, #171717) create depth within the dark theme without relying on heavy shadows, giving the interface a layered, architectural feel. The interplay of razor-sharp edges and large, soft radii (100px pill buttons) generates an engaging tension, balancing technical precision with approachable interactivity.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #000000 | neutral | Primary page background, text (on light elements), borders, illustration backgrounds. The foundational dark color that defines the theme. |
| Deep Graphite | #080808 | neutral | Card backgrounds, elevated container surfaces. Provides subtle separation from the primary canvas. |
| Rich Coal | #171717 | neutral | Secondary elevated surfaces, slightly darker than Deep Graphite for further distinction. |
| Cloud White | #FFFFFF | neutral | Primary text, core interactive element backgrounds (buttons), accents on dark backgrounds. High contrast against dark surfaces. |
| Mercury Gray | #999999 | neutral | Secondary text, muted links, subtle borders. A desaturated tone for less prominent information. |
| Steel Gray | #666666 | neutral | Tertiary text, subtle separators, link borders. Provides a lower contrast alternative to Mercury Gray. |
| Electric Blue | #0099FF | brand | Observed in other backgroundColor, body borderColor, other stroke. Extracted usage does not support a distinct primary control color. |
| Velocity Blue | #0055FF | brand | Secondary brand accent, used for gradients and fills in illustrations. Provides a slightly deeper, more saturated blue. |
| Shadow Tint | #021f33 | brand | Dark blue tint used in shadows, adding a subtle chromatic depth to elevated elements. |
| Interactive Blue Tint | #0000ee | neutral | Supporting palette color with insufficient usage evidence for a stronger role. Extracted usage does not support a distinct primary control color. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif |  | 400 | 12px | 1.2 | sans-serif — detected in extracted data but not described by AI |
| Inter Variable | Inter | 400 | 8px, 12px, 13px, 14px, 15px, 18px, 24px | 0.80, 1.00, 1.07, 1.20, 1.30, 1.40 | Primary UI text for body, captions, and some headings. Its variable nature allows for precise tailoring to content needs. |
| Inter | Inter | 400, 500, 600, 700 | 10px, 12px, 13px, 14px, 20px, 22px | 0.83, 1.00, 1.10, 1.15, 1.20, 1.30, 1.40, 1.60 | Supportive body text and information hierarchy secondary to Inter Variable. Used for links and smaller headings. The range of weights provides granular control. |
| Mona Sans | Inter | 500 | 12px, 13px, 17px, 18px, 62px | 1.00, 1.20, 1.30, 1.70, 2.28 | Distincitve display headings and prominent sub-headings. Its unique character contributes to brand personality in key areas. |
| GT Walsheim Medium | Montserrat | 500 | 32px, 62px, 85px | 0.95, 1.00, 1.13 | Bold, impactful display text for hero sections and major headers. Its strong presence defines primary messaging. |
| GT Walsheim Framer Medium | Montserrat | 500 | 110px | 0.85 | Largest, most authoritative display text, used sparingly for maximum impact in hero sections. Establishes the brand's confident tone. |
| Open Runde | Roboto Condensed | 600 | 9px | 1.11 | Specialized, highly condensed text for labels or metadata where space is limited and distinctiveness is desired. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| nav-link | 13 | 1.07 | -0.13 |
| heading-sm | 20 | 1.1 | -0.6 |
| heading | 24 | 1.4 | -0.24 |
| heading-lg | 32 | 0.95 | -1.6 |
| display-sm | 62 | 1 | -3.1 |
| display-md | 85 | 1.13 | -4.25 |
| display | 110 | 0.85 | -5.5 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "10px",
    "buttons": "100px",
    "default": "8px",
    "minimal": "1px",
    "decorative": "15px",
    "extra-large": "40px",
    "large-cards": "30px"
  },
  "elementGap": "10px",
  "sectionGap": "60px",
  "cardPadding": "40px",
  "pageMaxWidth": null
}
```

## Components

### Primary Ghost Button

**Role:** Action button

Ghost button with no background and transparent border, typically used for secondary actions or links. Text color can vary but is often an interactive blue or white. Padding 10px vertical, 14px horizontal for smaller instances.

### Secondary Button (White)

**Role:** Call to action

Filled button with a Cloud White (#FFFFFF) background and #0000EE text. Features a 100px border-radius, giving it a pill shape. Padding: 10px vertical, 14px horizontal.

### Tertiary Button (Ghost Frosted)

**Role:** Secondary action button

Ghost button with a semi-transparent white background rgba(255, 255, 255, 0.15) and a 100px border-radius. Text is typically #0000EE. Padding: 10px vertical, 14px horizontal.

### Text Button / Link

**Role:** Navigation or in-line action

Minimal button with rgba(255, 255, 255, 0.1) background and 40px border-radius, often used for subtle navigation within a dark context. Has #000000 text and 0px padding. Sometimes text only if backgroundColor is rgba(0,0,0,0).

### Default Card

**Role:** Content container

Standard card with Midnight Ink (#000000) background, 10px border-radius, no box shadow initially. Padding is often 0px, designed for content to define its own internal spacing.

### Elevated Card

**Role:** Highlighted content container

Card with Deep Graphite (#080808) background and a large 30px border-radius. No box shadow, relying on background contrast for elevation.

### Subtle Card

**Role:** Informational or less prominent content

Card with a very subtle background tint of rgba(0, 0, 0, 0.03), 20px border-radius and 40px internal padding. Used for lighter sections or within other components. Note: This color indicates usage on a light canvas, which is not the dominant theme here.

### Bordered White Card

**Role:** Featured content container with subtle visual appeal

Card with a rgba(255, 255, 255, 0.1) background and 30px border-radius. Features 1px padding, which likely acts as an internal border or separator.

## Do's

- Use Midnight Ink (#000000) for primary page backgrounds to maintain the immersive dark theme.
- Employ Cloud White (#FFFFFF) for all primary text and critical interactive button fills to ensure high contrast and readability.
- Apply Electric Blue (#0099FF) sparingly as an accent for interactive elements, borders, and hover states to guide user attention.
- Ensure all buttons feature a 100px border-radius to consistently achieve a 'pill' shape.
- Utilize GT Walsheim Medium and GT Walsheim Framer Medium for impactful headlines, prioritizing their distinctive weight 500.
- Maintain a compact density for element spacing, with a default elementGap of 10px, allowing visual elements to feel close-knit.
- Implement the subtle #021f33 blue tint in shadows for any elevated elements to keep depth cohesive with the brand palette.

## Don'ts

- Avoid using bright or overly saturated colors outside of the defined Electric Blue and Velocity Blue accents.
- Do not introduce square or sharp corners on buttons; they must always use the 100px pill radius.
- Do not use generic gray shadows; all shadows should leverage the blue-tinted #021f33 to maintain brand consistency.
- Avoid excessive spacing between elements; the design emphasizes a compact and dense information presentation.
- Do not use transparent backgrounds without a clear visual purpose; surfaces are typically solid or subtly layered near-blacks.
- Do not deviate from the specified font families for headings (GT Walsheim, Mona Sans), as they are key to brand typography.
- Avoid using light backgrounds exclusively, as the design system is fundamentally built upon a dark theme.

## Layout

The page primarily uses a max-width contained layout section-by-section, though the hero element achieves a full-bleed effect by filling the entire viewport with the dark background. The hero features a large, centered headline and subtext with two signature pill-shaped buttons below. Sections often follow an alternating pattern of background colors (Midnight Ink, Deep Graphite) and content arrangements, though most appear on pure black. Content frequently uses a centered stack or a split-panel approach with text on one side and an image/product screenshot on the other. A prominent feature is a dense, responsive grid for case studies or product examples, showcasing a variety of brand aesthetics within the Framer ecosystem. Navigation is a sticky top bar, providing persistent access.

## Imagery

The visual language is a blend of product screenshots, abstract generative graphics, and minimalist iconography. Product screenshots are meticulously cropped, often presented within mock devices or with soft, gradient-tinted backdrops, showcasing the UI without much surrounding context. Abstract graphics are geometric, sometimes fluid, and use the brand's vivid blues and a broader rainbow of saturated colors against the dark background, serving decorative and atmospheric roles. Icons are typically monochrome (white on black or vice-versa), conveying information with clear, functional outlines. Imagery is used to either highlight product capabilities or create a dramatic, future-forward mood, often occupying significant visual space. The density is high, with images working alongside text rather than merely supporting it, creating an image-dominant experience in many sections.

## Elevation

| Element | Style |
| --- | --- |
| Card / Elevated elements | rgba(0, 0, 0, 0.25) 0px 1px 2px 0px |
| Card / Stronger Elevation | rgba(255, 255, 255, 0.1) 0px 0.5px 0px 0.5px, rgba(0, 0, 0, 0.25) 0px 10px 30px 0px |
| Card / Subtle Elevation | rgb(9, 9, 9) 0px 0px 0px 2px |
| Card / Deeper Visual Impact | rgba(0, 0, 0, 0.6) -10px 10px 20px 10px |

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Dark-mode UI with high-contrast text and a focus on developer tools and abstract graphics. Uses similar bold display typography. |
| Linear | Minimalist dark aesthetic, strong reliance on typography for hierarchy, and sparse but impactful accent colors for interactivity. |
| Supabase | Dark theme with bright, singular accent colors for CTAs and status indicators, often featuring prominent code blocks and technical product showcases. |
| Ray.so | Dark, code-focused design with an emphasis on visual clarity and impactful typography against a deep background, uses bright accent glows. |
| PlanetScale | Dark theme with strategic use of vibrant accent colors to highlight features and actions, often pairing them with crisp product visuals and clear type. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #FFFFFF
background: #000000
border: #000000
accent: #0099FF
primary action: #ffffff (filled action)

3-5 Example Component Prompts:
Create a hero section: Midnight Ink (#000000) background. Headline at 110px GT Walsheim Framer Medium, #FFFFFF, letter-spacing -0.05em, line-height 0.85. Subtext at 24px Inter Variable, #FFFFFF, letter-spacing -0.01em, line-height 1.40. Two buttons below, left: Secondary Button (White) with text 'Start for free', right: Tertiary Button (Ghost Frosted) with text 'Start with AI'.
Create an elevated card: Deep Graphite (#080808) background, 30px border-radius. Inside, use Mona Sans 62px #FFFFFF for a main title and Inter Variable 18px #999999 for body text. Add Subtle Card (rgba(0,0,0,0.03)) nested inside, 20px radius, 40px padding.
Create a navigation item: Inter Variable 14px #999999 text for general links. For active items, use Electric Blue (#0099FF) text.
Create a content section with three Default Cards in a row: Midnight Ink (#000000) background, 10px border-radius, no padding. Each card contains a Mona Sans 32px #FFFFFF subheading and Inter 14px #999999 body text. Gap between cards should be 10px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777422512282-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777422512282-thumb.jpg |
