# Dogstudio — Refero Style

- Refero URL: https://styles.refero.design/style/0078edb1-1966-4473-94d6-b0f7dd62c6a2
- Site URL: https://dogstudio.co
- ID: 0078edb1-1966-4473-94d6-b0f7dd62c6a2
- Theme: dark
- Industry: agency
- Created: 2026-03-10T18:18:53.000Z
- Ranks: newest: 1060, popular: 447, trending: 686

> Twilight Gallery Vignettes. Deep, contemplative canvases showcasing bold typographic statements and ephemeral visual accents.

## Description

This design system conjures a potent, immersive atmosphere, like a high-concept art installation bathed in twilight. Dominant deep, desaturated purplish-grays (#131419, #454856) serve as a nocturnal canvas, punctuated by the expressive, large-scale serif headlines of GT Sectra Display. Precise, widely tracked sans-serif text (Heebo, Gilroy) provides functional contrast, while a singular, vivid red (#ff4940, #e43333) acts as a fleeting, energetic accent, like a flash of neon in a darkened gallery. The tight, often zero-padded components with minimal radii reinforce a focused, almost austere presentation that places maximum emphasis on the hero imagery and typography.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Canvas | #131419 | neutral | Page backgrounds, section fills, forming the primary dark theme backdrop. |
| Ghostly Gray | #454856 | neutral | Subtle desaturated gray for secondary text, list items, and borders, providing a soft contrast against Midnight Canvas. |
| Whisper White | #ffffff | neutral | Primary text, prominent headings, and essential icon fills, offering high contrast and legibility on dark backgrounds. |
| Abyssal Black | #000000 | neutral | Accent backgrounds (such as the menu overlay in screenshots), occasionally used for text where extreme contrast is desired. |
| Twilight Indigo | #767ca2 | brand | Interactive elements like links, badges, and icon fills — its muted violet hue provides a cohesive, subtly chromatic accent. |
| Nebula Violet | #848ab5 | brand | Links, body text within specific components, and decorative icons; a slightly lighter shade of the Twilight Indigo, appearing as an active state or secondary brand accent. |
| Flare Red | #ff4940 | accent | Small, impactful accents, such as interactive states (e.g., hover effects on text or icons) or graphic elements in the hero. |
| Impact Red | #e43333 | accent | Distinctive background color for specific small elements like a 'play' button in the header, capturing attention without dominating the muted palette. |
| Shadow Gray | #565a6b | neutral | Minor list item text or subtle borders, blending into the dark background more than Ghostly Gray. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| GT Sectra Display | Playfair Display | 400, 700 | 50px, 120px | 0.89, 1.00 | Hero and major section headlines. Its wide letter-spacing (-0.192em at 120px, -0.067em at 50px) combined with bold serif adds a dramatic, editorial flair. |
| Heebo | Open Sans | 200, 300, 400, 500 | 11px, 12px, 13px, 14px, 20px, 22px, 23px, 60px, 80px | 0.82, 0.92, 1.00, 1.35, 1.52, 1.70, 1.71, 2.10 | Primary body text, standard links, navigation, and smaller headings. Its versatile weight range and slightly condensed form maintain a sleek appearance. |
| Gilroy | Montserrat | 500, 700 | 11px, 12px | 1.00 | Uppercase labels, metadata, and very small, decorative text; its extremely wide letter-spacing creates a distinctive, structured visual break. |
| Arial | Arial | 400 | 13px | 1.20 | Fallback and utilitarian text, primarily for simple interactive elements like menu toggles or small body text where a clean, legible default is needed. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 11 | 1.71 | -0.44 |
| heading | 50 | 0.89 | -3.35 |
| display | 120 | 1 | -23.04 |

## Spacing & Shape

```json
{
  "radius": {
    "links": "3px",
    "default": "0px"
  },
  "elementGap": "6px",
  "sectionGap": "50px",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### Studio Description with Social Links



### Featured Projects List



### Studio About Block with CTA



### Ghost Header Button

**Role:** Interactive element

Transparent button with no background (rgba(0, 0, 0, 0)), black text (#000000), 0px border radius, and padding of 8px vertically and 6px horizontally. Serves as a visually minimal call to action or navigation link.

### Navigation Badge

**Role:** Passive label/link

Transparent background (rgba(0, 0, 0, 0)), text color #a0a8dc80 (Twilight Indigo 80% opacity), 0px border radius, and no padding. Used for subtle navigation or categorical labels, blending into the background.

## Do's

- Prioritize GT Sectra Display for all major headlines to establish the brand's editorial and dramatic typographic voice, leveraging its distinctive letter-spacing.
- Use Heebo for most functional text at various weights, maintaining a tight letter-spacing of -0.02em for a slightly condensed, modern feel.
- Apply Twilight Indigo (#767ca2) or Nebula Violet (#848ab5) for all interactive text elements (links, active states) to leverage the system's subtle chromatic identity.
- Deploy Flare Red (#ff4940) sparingly for small, high-impact interactive indicators or graphic accents, never as a primary text or background color.
- Maintain a primary background of Midnight Canvas (#131419) across all main sections to ensure a consistent dark, immersive aesthetic.

## Don'ts

- Do not use generic system fonts for headlines or prominent text; the custom GT Sectra Display and widely-tracked Gilroy are essential to brand identity.
- Avoid excessive use of black (#000000) or white (#ffffff) as primary solid backgrounds, reserving them for specific component backgrounds or high-contrast utility.
- Do not introduce additional color hues or vivid saturations beyond the established palette; the dark, muted base with specific red and violet accents is key.
- Refrain from adding strong box-shadows or significant border radii; the design relies on flat surfaces and minimal rounded elements (defaulting to 0px) for its sleekness.
- Do not use widely tracked spacing with body text or functional elements; extreme letter-spacing is reserved for decorative, uppercase Gilroy text only.

## Layout

The site employs a full-bleed layout for the hero section with a centered headline and supporting text over a dramatic background visual. Subsequent sections maintain a strong vertical rhythm, with content often centered or using a text-left/visual-right pattern. The overall page model is max-width contained for textual content, but backgrounds often stretch full-width. Vertical spacing between sections is generous (implied 50px-100px range, derived from sparse data), creating a spacious and uncrowded feel. Navigation is a minimalist top-right hamburger menu, consistent across the site, with branding prominent on the top left. The page feels like a series of curated vignettes, with visual elements taking precedence over dense information blocks.

## Imagery

The visual language is characterized by complex, often surreal 3D renders that dominate hero sections, such as the prominent wolf illustration. Imagery uses a dark, moody color treatment, with blues, purples, and deep grays, often appearing semi-translucent or with ethereal light effects. These are contained within the viewport but often bleed visually into the dark background, creating an immersive, fluid experience. Decorative floating elements, like leaves or geometric lines, often accompany these main visuals, providing atmospheric detail rather than explanatory content. The imagery is art-focused and atmospheric, serving to set a mood and present a 'wow' factor rather than directly showcasing products.

## Similar Brands

| Business | Why |
| --- | --- |
| Awwwards | Shares a focus on showcasing high-quality visual content within a dark, minimalist, and often experimental typographic framework. |
| Locomotive Agency | Exhibits a similar dark aesthetic with impactful, often large-scale typography and compelling fullscreen imagery that creates an immersive brand experience. |
| Obys Agency | Utilizes sophisticated dark themes, custom, expressive typography, and refined interaction design to create a premium, artistic feel. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text (primary): #ffffff
- Background (primary): #131419
- CTA (interactive): #767ca2
- Border (subtle): #454856
- Accent (impact): #ff4940

### 3-5 Example Component Prompts
1. Create a hero section: background #131419, with a large illustrative visual. Overlay a primary headline 'We Make Good Shit' using GT Sectra Display, size 120px, weight 700, #ffffff, letter-spacing -23.04px. Below it, add a link 'Our Showreel' with text color #767ca2 using Heebo, size 14px, weight 400, letter-spacing -0.02em.
2. Design a navigation item: text 'The Studio' using Heebo, size 13px, weight 400, color #ffffff, letter-spacing -0.02em. Upon hover, change text color to #767ca2.
3. Implement a page section: on a Midnight Canvas (#131419) background, add a body paragraph 'Dogstudio is a multidisciplinary creative studio...' using Heebo, size 14px, weight 400, color #454856, letter-spacing -0.02em.
4. Produce a badge element: text '2023-ONGOING' using Gilroy, size 12px, weight 500, color #767ca2, letter-spacing 0.36em, background transparent.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925476403-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775925476403-thumb.jpg |
