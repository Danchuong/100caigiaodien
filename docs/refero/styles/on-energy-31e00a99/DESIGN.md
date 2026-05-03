# ON.energy — Refero Style

- Refero URL: https://styles.refero.design/style/31e00a99-6946-4f07-829a-b0904a39a20d
- Site URL: https://www.on.energy
- ID: 31e00a99-6946-4f07-829a-b0904a39a20d
- Theme: dark
- Industry: ai
- Created: 2026-03-16T09:39:41.000Z
- Ranks: newest: 1037, popular: 331, trending: 444

> Industrial Luxe on a Dark Stage. The UI feels like a high-tech data center interior, where essential information is presented with precision and a focused burst of energy.

## Description

This system evokes a technical, industrial luxury with its stark achromatic palette punctuated by a single vibrant yellow. The dark background (#202020 or #000000) serves as a canvas for precise typography, predominantly the custom Univers Next Pro, often rendered in negative letter-spacing for a sophisticated, whispered delivery. Rounded corners are selectively applied, with the default being 6px, but larger curves for specific button styles introduce a subtle tension, softening otherwise rigid industrial forms.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Steel | #000000 | neutral | Primary background, text on yellow accents, outlines for key elements. |
| Data Center Graphite | #202020 | neutral | Secondary background surfaces, creating subtle depth against Midnight Steel. |
| Industrial Silver | #afafaf | neutral | Subtle text, inactive states, borders on dark backgrounds. Gives a mechanical sheen. |
| Screen White | #eeeeee | neutral | Prominent text on dark backgrounds, active states, outlines. Provides high contrast for readability. |
| Electric Yellow | #fff313 | brand | Primary accent, CTA buttons, active navigation indicators, key highlights. Commands attention with high saturation. |
| Asphalt Gray | #4b4b4b | neutral | Link colors, subtle separators, less prominent text on hero sections. |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Univers Next Pro | Inter | 300, 400 | 10px, 12px, 14px, 16px, 24px, 36px, 64px | 1.00, 1.13, 1.17, 1.20, 1.38 | All textual content: headlines, body text, navigation, buttons. The custom font contributes significantly to the industrial, precise aesthetic, especially with its specific letter spacing at larger sizes. Weight 300 is often reserved for impactful headlines, signaling authority through lightness rather than heavy bolding. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.38 |  |
| body | 14 | 1.2 |  |
| heading | 24 | 1.13 | -0.48 |
| display | 64 | 1 | -2.56 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "9px",
    "buttons": "6px",
    "default": "6px",
    "specialButton": "16px"
  },
  "elementGap": "16px",
  "sectionGap": "64px",
  "cardPadding": "",
  "pageMaxWidth": "1350px"
}
```

## Components

### Electric CTA Button Group



### Discover AI UPS — Overlay Card



### Latest News Cards



### Dark Ghost Button

**Role:** Secondary interactive elements within dark sections.

Background: rgba(237, 237, 237, 0.2), Text: #eeeeee, Border: #eeeeee. Radius: 6px. Padding: 0px 14px.

### Electric CTA Button

**Role:** Primary calls to action.

Background: #fff313, Text: #000000, Border: #000000. Radius: 6px. Padding: 0px 17px.

### Accent Pill Button

**Role:** Subtle interactive elements, often within hero or image overlays.

Background: rgba(255, 255, 255, 0.2), Text: #eeeeee, Border: #eeeeee. Radius: 16px. Padding: 6px 16px.

### Outline Accent Button

**Role:** Navigation or tertiary actions, particularly on lighter backgrounds.

Background: rgba(0, 0, 0, 0), Text: #fff313, Border: #fff313. Radius: 0px. Padding: 0px 24px.

### News List Item

**Role:** Informational cards within news feeds.

Background: rgba(0, 0, 0, 0), No border or shadow. Radius: 0px. Padding: 6.5px 0px.

### Image Card

**Role:** Content presentation with imagery.

Background: rgba(0, 0, 0, 0), No border or shadow. Radius: 9px. Padding: 0px.

### Header Navigation Item

**Role:** Top-level site navigation links.

Text: #eeeeee (default), #fff313 (active). Background: rgba(0, 0, 0, 0) (default), #333333 (hover/active pseudo-background). Font: Univers Next Pro, weight 400, size 16px. Padding: 0px 16px (approx).

## Do's

- Use Electric Yellow (#fff313) exclusively for primary CTAs and active states.
- Apply Univers Next Pro weight 300 with negative letter-spacing for all significant headlines to achieve a whispered authority.
- Maintain a default border-radius of 6px for most interactive elements and a 9px radius for image cards.
- Layer backgrounds using Midnight Steel (#000000) and Data Center Graphite (#202020) to create depth without shadows, like nested panels.
- Ensure high contrast text (#eeeeee or #000000) against background colors, adhering to AAA accessibility standards.
- Use System 4px as the base unit for all dimensional measurements, ensuring consistent spacing multiples.

## Don'ts

- Do not introduce new vibrant colors outside of the defined Electric Yellow; maintain the stark achromatic palette.
- Avoid using drop shadows for elevation; rely on background layering and subtle borders for perceived depth.
- Do not use highly decorative or script fonts; stick to Univers Next Pro to maintain the technical, precise aesthetic.
- Never use positive letter spacing; the brand's typographic signature relies on condensing character forms.
- Do not apply large, soft gradients; the system prefers solid, well-defined color blocks and sharp lines.
- Avoid generic stock photography; imagery should be technical, product-focused, or abstract, aligning with the industrial feel.

## Layout

The page uses a mixed layout approach, beginning with a full-bleed dark hero section featuring a centered headline over a large product image. Subsequent sections alternate between full-width dark backgrounds and lighter #eeeeee sections. Content is primarily centered within a 1350px max-width container, often featuring side-by-side text and visuals (text-left/image-right alternating). Vertical spacing between sections is generous (64px). Navigation is a fixed top bar on a dark background, featuring subtle interactive states. The rhythm is highly structured, almost architectural, creating a sense of order and high performance.

## Imagery

Imagery primarily consists of tight product photography presented with industrial precision, showcasing high-tech hardware or abstract representations of energy flow. There is a strong emphasis on product shots of machinery. Photography is often presented in a muted, desaturated palette or integrated almost as textures within the dark UI. Corner radii on image cards are subtle (9px). Icons are minimalist and outlined, supporting the technical atmosphere without adding visual clutter. The overall density of imagery is balanced with text, serving to explain or showcase rather than purely decorate.

## Similar Brands

| Business | Why |
| --- | --- |
| OpenAI | Shared use of a dark, high-contrast UI with a single vibrant accent color for interaction and highlighting. |
| Palantir | Serious, data-driven aesthetic leveraging dark themes and precise, often condensed typography for readability of complex information. |
| Supabase | Developer-focused infrastructure feel with a minimalist dark mode and strategic use of a distinct accent color for interactive elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- Text on dark: #eeeeee
- Background: #000000
- CTA: #fff313
- Border/Inactive: #afafaf
- Secondary Background: #202020

Example Component Prompts:
1. Create a hero section with a Midnight Steel (#000000) background. Headline 'Perfect Power for AI Factories.' using Univers Next Pro weight 300, size 64px, #eeeeee, letter-spacing -2.56px. Below it, add body text 'ON.energy builds and operates hyperscale power systems to solve the toughest resilience challenges.' Univers Next Pro weight 400, size 14px, #eeeeee, line-height 1.2.
2. Create an Electric CTA Button: background #fff313, text #000000, radius 6px, padding 0px 17px. Button text 'Get in touch' Univers Next Pro weight 400, size 16px.
3. Create a Dark Ghost Button: background rgba(237, 237, 237, 0.2), text #eeeeee, border #eeeeee, radius 6px, padding 0px 14px. Button text 'Expertise' Univers Next Pro weight 400, size 16px.
4. Design a News List Item card without background or shadow. It should include a link: 'ON.energy Deploys Medium Voltage AI UPS for Grid-Safe AI Campuses...', Univers Next Pro weight 400, size 14px, color #afafaf (default), color #fff313 (hover), padding 6.5px 0px.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776008647523-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1776008647523-thumb.jpg |
