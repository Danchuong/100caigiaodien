# Fiasco — Refero Style

- Refero URL: https://styles.refero.design/style/ef73c742-1c3b-48b9-a174-de365ecc4691
- Site URL: https://fiasco.design
- ID: ef73c742-1c3b-48b9-a174-de365ecc4691
- Theme: light
- Industry: agency
- Created: 2026-04-30T00:27:41.225Z
- Ranks: newest: 793, popular: 1013, trending: 945

> Gallery canvas, warm minimal.

## Description

Fiasco projects a refined, tactile aesthetic using a muted off-white canvas and discreet typographical hierarchy. The system prioritizes crisp, open layouts punctuated by occasional vibrant accent colors that appear as focused, deliberate flashes rather than overwhelming washes. Components often feature generous radii, conveying a soft, approachable feel despite the otherwise formal typography. The overall impression is one of crafted minimalism with attention to subtle detail and comfortable negative space.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Cloud Canvas | #f8f9f3 | neutral | Page background, primary surface, light button border, input background |
| Soot Black | #1d1e19 | neutral | Primary text, almost-black button background, input text, default border for elements |
| Ash Grey | #e9eae2 | neutral | Secondary surface, subtle background for sections and UI elements, navigation stroke |
| Slate Border | #686e77 | neutral | Input field borders, often an accent for accessibility on form elements |
| Midnight Ink | #151612 | neutral | Footer background, dark section backgrounds |
| Accent Yellow | #fff714 | accent | Decorative background for cards or highlight elements — a vibrant, unexpected pop |
| Candy Pink | #fbc2d1 | accent | Distinctive card background, decorative accents – muted yet playful |
| Sky Blue | #84bdff | accent | Decorative card background, often paired with neutral content |
| Vivid Orange | #fd6b01 | accent | Orange wash for highlight backgrounds, decorative bands, and soft emphasis behind content. Do not promote it to the primary CTA color |
| Forest Green | #03ac47 | accent | Green wash for highlight backgrounds, decorative bands, and soft emphasis behind content |
| Action Blue | #204ce5 | brand | Primary call-to-action button background, signaling interactivity and core user flow |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Area-Normal | Inter | 400, 500, 600 | 12px, 13px, 14px, 18px, 20px, 30px, 60px, 80px | 1.00, 1.10, 1.20, 1.40, 1.43, 1.50, 1.60, 2.71 | Primary text across body, inputs, buttons, navigation, and core content; its variable weight supports hierarchy and emphasis without leaving its defined family. |
| HAL Timezone | IBM Plex Sans | 100, 400, 500 | 12px, 20px, 22px, 34px | 1.20, 1.40, 1.50, 2.00 | Header text and selected navigation elements. Its distinct narrow character and light weights add a refined, almost technical touch, distinguishing it from the body copy. |
| Gooper | Open Sans | 400, 500, 700 | 16px, 17px, 19px, 40px | 0.80, 1.20, 1.30 | Used for specific headings and internal links, Gooper provides a slightly more rounded, approachable feel than Area-Normal, reserving its bolder weights for impactful titles. |
| OC Highway | Roboto Condensed | 400 | 10px | 1.10 | Used for small, highly tracked labels or metadata, providing a technical and spaced-out stylistic choice that creates clear separation from main content blocks. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.1 | 1 |
| body-lg | 14 | 1.6 | -0.28 |
| subheading | 19 | 1.2 | -0.38 |
| heading | 30 | 1.2 | -0.6 |
| heading-lg | 40 | 1.2 | -1 |
| display | 80 | 1 | -2.32 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "links": "44px",
    "inputs": "3px",
    "buttons": "800px",
    "heroContainer": "40px"
  },
  "elementGap": "12px",
  "sectionGap": "32px",
  "cardPadding": "12px",
  "pageMaxWidth": "1440px"
}
```

## Components

### Subtle Ghost Button

**Role:** Secondary action or tag

Rounded button with Soot Black text (#1d1e19) and a transparent background (rgba(29, 30, 25, 0.05)), featuring a 1px Soot Black border (#1d1e19) and fully rounded '800px' corners. Padding is 0px vertical and 12px horizontal.

### Primary Filled Button

**Role:** Call to action

Solid button with Action Blue background (#204ce5), white text (#FFFFFF), and fully rounded '800px' corners. Padding is 8px vertical and 20px horizontal.

### Navigation Link Button

**Role:** Top-level navigation

Circular button with Soot Black background (#1d1e19) and Cloud Canvas text (#f8f9f3), fully rounded '800px'. Padding is 8px vertical and 20px horizontal.

### Standard Card

**Role:** Content container

Transparent background with 8px border-radius and no shadow. No intrinsic padding.

### Hero Section Card

**Role:** Prominent content container

Transparent background with 0px border-radius and no shadow, used for full-width content display without visual containment.

### Accent Pink Card

**Role:** Highlight content

Card with Candy Pink background (#fbc2d1), 8px border-radius, and no shadow. Features 0px vertical padding and 16px horizontal padding, with 20px bottom padding for content.

### Soft Input Field

**Role:** User input

Input field with a translucent Cloud Canvas background (rgba(248, 249, 243, 0.25)) and Soot Black text (#1d1e19). Features a 1px Soot Black border (#1d1e19), 4px border-radius, and 12px vertical padding with 16px horizontal padding.

### Clean Input Field

**Role:** Standard user input

Input field with a white background (#FFFFFF) and Slate Border (#686e77), uses 3px border-radius. No intrinsic padding.

## Do's

- Use Cloud Canvas (#f8f9f3) as the default page background for all primary content areas.
- Apply Soot Black (#1d1e19) for all primary text content to maintain strong contrast and readability.
- Ensure all text inputs utilize the 3px border-radius with a Slate Border (#686e77) on focus.
- Prioritize fully rounded '800px' corners for all buttons and tags, creating a soft, approachable aesthetic.
- For accentuation of content blocks, select from Accent Yellow (#fff714), Candy Pink (#fbc2d1), Sky Blue (#84bdff), Vivid Orange (#fd6b01), or Forest Green (#03ac47) as card backgrounds.
- Use 12px as the consistent `elementGap` for horizontal and vertical spacing between related components.
- Utilize Area-Normal font family for all body text, adjusting weights (400, 500, 600) and sizes (12-80px) to establish hierarchy.

## Don'ts

- Avoid using primary brand colors for extensive backgrounds; reserve vibrant colors for deliberate highlights and accents.
- Do not introduce sharp corners or minimal radii where a rounded aesthetic (8px or 800px) is expected, particularly for cards and buttons.
- Do not deviate from the established font families; avoid system fonts or other custom typefaces.
- Do not use letter-spacing values less than -0.0330em or greater than 0.1000em, as found in OC Highway, for readability and brand consistency.
- Avoid large, intrusive shadows; apply soft, subtle elevation where needed, like rgba(18, 25, 97, 0.08) 0px 1px 4px 0px.
- Do not exceed the pageMaxWidth of 1440px for contained content, ensuring a focused reading experience.
- Do not use generic gray tones for input borders; always prefer Soot Black (#1d1e19) for default states and Slate Border (#686e77) for specific form elements.

## Layout

The page adheres to a max-width 1440px centered model. The hero section often presents a large, centered headline over a background that alternates between full-bleed imagery and the Cloud Canvas. Sections maintain a consistent vertical rhythm, often delineated by distinct background colors or subtle changes in surface level. Content is structured in responsive grids, commonly a 2-column or 3-column arrangement for feature cards and portfolio items. Text-heavy blocks are centered or left-aligned within their containers, creating a spacious and comfortable reading experience. The primary navigation is a sticky top bar with minimal links and a discrete time display.

## Imagery

The visual language predominantly features clean, product-focused photography and abstract graphics. Photography consists of tight crops of technology or urban landscapes, often with a slightly desaturated, naturalistic color palette. Illustrations are minimal and graphic, serving as decorative accents or background elements. Icons are filled, monochrome, and have a clear, moderate stroke weight. Imagery primarily serves to create atmosphere or visually break up text, rather than being explicitly explanatory. The density is moderate, with images appearing in grid layouts, often within cards, interspersed with text blocks.

## Elevation

| Element | Style |
| --- | --- |
| Input fields, Secondary Buttons | rgba(18, 25, 97, 0.08) 0px 1px 4px 0px |
| Hero sections, Cards | rgba(0, 0, 0, 0.16) 0px 28px 80px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| Focus Lab | Similar approach to using a limited, high-contrast color palette, clean typography, and a spacious layout with subtle background variations. |
| Huge Inc. | Employs an editorial-style typography hierarchy and significant use of negative space, combined with understated accent colors within design agency portfolios. |
| Work & Co | Shares a minimalist design aesthetic with a strong emphasis on content, large headlines, and a sophisticated, almost monochrome color scheme with rare, impactful color pops. |
| North Kingdom | Utilizes a balanced layout with photography and text blocks, keeping UI elements subdued to let content and case studies shine, often with a similar soft neutral background. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #1d1e19
- background: #f8f9f3
- border: #1d1e19
- accent: #fff714
- primary action: #204ce5 (filled action)

Example Component Prompts:
- Create a section divider: 1px solid Ash Grey border (#e9eae2), 12px vertical elementGap from surrounding content.
- Create a feature card: Cloud Canvas background (#f8f9f3), 8px border-radius, 12px cardPadding. Headline (Gooper, 40px, 700, #1d1e19, letter-spacing -1.0px). Body text (Area-Normal, 14px, 400, #1d1e19, lineHeight 1.6).
- Create a Primary Action Button: #204ce5 background, #f8f9f3 text, 9999px radius, compact pill padding. Use this filled treatment for the main CTA.
- Create a tag button: Subtle Ghost Button (rgba(29, 30, 25, 0.05) background, #1d1e19 text, 1px #1d1e19 border, 800px radius, 0px vertical padding, 12px horizontal padding). Font: Area-Normal, 12px, 400, letter-spacing -0.35px.
- Create a text input field: Soft Input Field (rgba(248, 249, 243, 0.25) background, #1d1e19 text, 1px #1d1e19 border, 4px radius, 12px vertical padding, 16px horizontal padding). Font: Area-Normal, 14px, 400, lineHeight 1.6.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508828312-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508828312-thumb.jpg |
