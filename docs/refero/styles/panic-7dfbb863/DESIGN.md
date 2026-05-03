# Panic — Refero Style

- Refero URL: https://styles.refero.design/style/7dfbb863-e3bb-4894-9ea9-c782efa85a2d
- Site URL: https://panicstudio.tv
- ID: 7dfbb863-e3bb-4894-9ea9-c782efa85a2d
- Theme: mixed
- Industry: media
- Created: 2026-04-30T01:52:34.748Z
- Ranks: newest: 500, popular: 1303, trending: 1303

> Vibrant type on contrasting canvas.

## Description

Panic Studio's design system combines bold, expressive typography with a vibrant, contrasting color palette. The visual identity alternates between a warm, soft peach background with dark text and a moody, dark background punctuated by energetic yellow headlines. Components are minimal, relying on generous spacing and high contrast to define their presence. The overall impression is playful yet authoritative, reflecting a creative agency that values strong visual storytelling.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Panic Peach | #f8e2db | neutral | Dominant background for light sections, providing a warm and inviting base |
| Midnight Ink | #0e1017 | neutral | Primary text color, dark backgrounds for contrasting sections, and ghost button borders. High contrast to emphasize content |
| Emerald Pop | #16ffbd | brand | Background for the brand's circular logo, providing a vivid, unexpected burst of color against neutrals |
| Sunbeam Yellow | #fff050 | accent | Accent for large, impactful headlines in dark sections and decorative flourishes like stars and arrows, creating an electrifying contrast |
| Pure White | #ffffff | neutral | Used for occasional text in dark sections and subtle border elements |
| Absolute Black | #000000 | neutral | Alternative color for primary text and various border elements, reinforcing high contrast |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roslindale | Playfair Display | 500 | 45px, 65px, 75px | 1.00, 1.10, 1.15 | Headlines and emphasis text. Its ornate, high-contrast display characteristics make it feel premium and bold, demanding attention. |
| GT Pressura | Inter | 300 | 22px | 1.45 | Body text, navigation, and button labels. Its lightness and slightly condensed form keep text feeling modern and airy, preventing it from competing with the expressive headlines. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| body | 22 | 1.45 | 0.11 |
| heading | 45 | 1.15 | 1.8 |
| heading-lg | 65 | 1.1 | 2.6 |
| display | 75 | 1 | 3 |

## Spacing & Shape

```json
{
  "radius": {
    "buttons": "60px"
  },
  "elementGap": "12px",
  "sectionGap": "90px",
  "cardPadding": "30px",
  "pageMaxWidth": null
}
```

## Components

### Ghost Button - Light

**Role:** Call to action button for light backgrounds.

Transparent background with a 2px solid border in Midnight Ink (#0e1017) and Midnight Ink (#0e1017) text. Highly rounded corners (60px radius). Padding of 10px vertical and 35px horizontal. Uses GT Pressura font at 22px, weight 300.

### Logo Circle

**Role:** Brand identity mark.

A circular element with a solid Emerald Pop (#16ffbd) fill. Contains the brand name in a dark font.

### Primary Navigation Link

**Role:** Top-level navigation item.

Text link in Midnight Ink (#0e1017) against light backgrounds or Pure White (#ffffff) against dark backgrounds. Uses GT Pressura font. Hover states likely involve an underline or color shift.

## Do's

- Use Panic Peach (#f8e2db) as the dominant background for light-themed sections, providing warmth.
- Pair Roslindale 500 headlines with GT Pressura 300 body text for consistent typographic contrast.
- Implement 60px border-radius for all interactive elements like buttons to maintain a soft, friendly aesthetic.
- Utilize Sunbeam Yellow (#fff050) exclusively for dramatic headlines or decorative graphical elements on dark backgrounds.
- Maintain generous 90px vertical section gaps and 50px horizontal column gaps to create a spacious, breathable layout.
- Employ Midnight Ink (#0e1017) for all primary text and un-filled button borders for strong contrast and legibility.
- Use Emerald Pop (#16ffbd) only for the brand logo or other specific brand marks, not for general UI elements.

## Don'ts

- Do not use Roslindale for body text; reserve it entirely for headlines and display text.
- Avoid using Sunbeam Yellow (#fff050) as a button background color or for large blocks of text.
- Do not introduce square or low-radius corners on interactive elements; enforce 60px radius.
- Do not use multiple font families beyond Roslindale and GT Pressura without explicit approval.
- Avoid tight element spacing; prioritize the generous 12px element gap and larger section paddings.
- Do not use Emerald Pop (#16ffbd) for any interactive states or general background elements.
- Do not use gradients; the system relies on solid color blocks for structure and impact.

## Layout

Pages are structured with a full-bleed background that alternates between Panic Peach and Midnight Ink. Content is centered and largely contained within a flexible max-width, creating a clear content rhythm. The hero section often features large, centered headlines over a solid background. Sections are separated by generous vertical spacing (90px). Content flows in mostly single-column stacks with occasional multi-column feature or work showcases, but always high contrast and centered. Navigation is a minimal top-right bar with simple text links.

## Imagery

This system primarily uses iconography and limited imagery. The branding relies on abstract, geometric shapes (like the circular logo background) and simple, expressive icons (e.g., down arrows, small starbursts). When present, product imagery is likely to be high-quality, contained, and without busy backgrounds, allowing the expressive typography to dominate. Icons should be monochrome outlined or filled with the brand's key accent colors (Sunbeam Yellow). Imagery is decorative and used to punctuate text rather than being content-heavy.

## Similar Brands

| Business | Why |
| --- | --- |
| Stripe | Uses high-contrast typography and a clean, spacious layout with a distinctive accent color for brand elements. |
| Figma | Employs a bold, expressive typography style for headlines alongside a minimalist UI with a strong brand color. |
| Huge Inc. | Showcases creative work using large, impactful headlines and a simple, highly contrasting color palette. |
| Active Theory | Features a strong dark mode aesthetic with vibrant, almost neon accent colors used sparingly for emphasis and interactivity. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #0e1017
background: #f8e2db
border: #0e1017
accent: #fff050
primary action: no distinct CTA color

Example Component Prompts:
1. Create a header section on Panic Peach (#f8e2db) background. Include the brand logo (Emerald Pop circle #16ffbd) on the left and a navigation bar on the right with 'Work', 'About', 'Jobs', 'Process', 'Contacts' as links in Midnight Ink (#0e1017), using GT Pressura 22px weight 300, 0.005em letter-spacing.
2. Design a hero section with a Midnight Ink (#0e1017) background. The main headline 'FEATURED WORK' should use Roslindale 75px weight 500, 0.04em letter-spacing in Sunbeam Yellow (#fff050).
3. Create a descriptive text block on a Panic Peach (#f8e2db) background. Use GT Pressura 22px weight 300, 0.005em letter-spacing for text in Midnight Ink (#0e1017). Below the text, add a Ghost Button 'Explore works': transparent background, 2px solid Midnight Ink (#0e1017) border, 60px radius, 10px vertical and 35px horizontal padding, with text in Midnight Ink (#0e1017) using GT Pressura 22px weight 300.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513938379-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777513938379-thumb.jpg |
