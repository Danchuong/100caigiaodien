# Rarible — Refero Style

- Refero URL: https://styles.refero.design/style/44c69f5d-68bf-4507-8f00-e6aa1c96246b
- Site URL: https://rarible.com
- ID: 44c69f5d-68bf-4507-8f00-e6aa1c96246b
- Theme: dark
- Industry: crypto
- Created: 2026-04-30T00:59:14.917Z
- Ranks: newest: 648, popular: 732, trending: 541

> Dark Terminal, Electric Green

## Description

Rarible presents a command center aesthetic: a dark canvas with sharp geometric cards and a singular vivid green accent. Typography is compact and precise, using a monospace family for detail and a clean sans-serif for headlines. Bordered elements and subtle elevation provide structure without visual clutter, creating a focused environment for digital asset trading. The dominant visual language emphasizes technicality and functional clarity over rich ornamentation.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Rich Black | #0a0a0a | neutral | Page backgrounds, card surfaces, table headers for a deep dark aesthetic |
| Graphite | #27272a | neutral | Hairline borders, subtle dividers, inactive input outlines — providing separation on dark surfaces |
| Ash Gray | #3b3b3b | neutral | Secondary borders for buttons and UI elements, slightly darker than Graphite |
| Silver Text | #9d9d9d | neutral | Muted secondary text, placeholder text — receding into the dark background |
| Off White | #cecece | neutral | Subtle text variant, slightly softer than pure white for minor details |
| White | #ffffff | neutral | Primary text, critical UI elements, active states, and elements that need to pop against dark backgrounds |
| True Black | #000000 | neutral | Text for specific UI elements, icon fills — providing maximum contrast |
| Dark Granite | #18181b | neutral | Dark borders and separators for elevated surfaces and inverted UI. Do not promote it to the primary CTA color |
| Cadmium Green | #faff00 | brand | Green action color for filled buttons, selected navigation states, and focused conversion moments |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Tomorrow | Outfit, Poppins | 400, 500 | 14px, 18px, 24px, 28px | 1.17, 1.29, 1.33, 1.43 | Headings and primary text that needs to stand out. Its slightly geometric structure provides a modern, confident tone. |
| Geist Mono | IBM Plex Mono, Fira Code | 400, 500 | 10px, 12px, 14px, 18px, 24px | 1.00, 1.17, 1.33, 1.40, 1.43 | Monospace for data display, code snippets, and structured information where precise alignment and a technical feel are desired. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 10 | 1.43 | 0 |
| body | 14 | 1.43 | 0 |
| subheading | 18 | 1.29 | 0 |
| heading | 24 | 1.17 | 0 |
| display | 28 | 1.33 | 0 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "12px",
    "buttons": "9999px",
    "default": "6px"
  },
  "elementGap": "8px",
  "sectionGap": "32px",
  "cardPadding": "16px",
  "pageMaxWidth": null
}
```

## Components

### Pill Ghost Button

**Role:** Secondary action or filter button

Transparent background, White text, Graphite border at 9999px radius (pill shape). Padding is minimal, e.g., 12px horizontal.

### Outline Text Button

**Role:** Tertiary action or navigation link

Transparent background, White text, no border, 0px radius. Used for inline actions or navigation within sections. Padding 12px horizontal, 16px vertical.

### Outline Rectangular Button

**Role:** Filter or category selection

Transparent background, White text, Graphite border at 4px radius, providing a slightly rounded rectangular shape. Minimal padding.

### Filled Filter Button

**Role:** Active filter or selection

Slightly opaque background (rgba(255, 255, 255, 0.06)), White text, Graphite border at 9999px radius. Used to indicate active selection in filters.

### Primary Action Button

**Role:** Prominent action button (Login, Get $RARI)

Cadmium Green background, Black text, 9999px radius. High contrast to immediately draw attention. Example padding 12px horizontal, 4px vertical (derived from 'Login' button).

### NFT Collection Card

**Role:** Display individual NFT collections or items

Rich Black background, 12px border radius, no box-shadow. Contains images and text, with 0px padding as content often bleeds to edges.

### Search Input

**Role:** Main search functionality

Transparent background, White text, Graphite border at 6px radius. Placeholder text in Silver Text. Padding 12px vertical.

### Table Row

**Role:** Display data in tabular format

Rich Black background, no border radius. Alternating background slight variations (not explicitly detected but typical in tables) and Graphite dividers between rows. Font uses Geist Mono for data.

## Do's

- Prioritize Rich Black (#0a0a0a) for all primary backgrounds and card surfaces to maintain the deep, dark aesthetic.
- Use Cadmium Green (#faff00) exclusively for primary calls-to-action, active states, and critical indicators, making it pop against the dark UI.
- Apply Geist Mono for all data-driven elements, tables, and numeric displays to convey a technical, precise feel.
- Utilize 9999px border radius for all interactive buttons and tags to create a consistent 'pill' shape.
- Maintain subtle visual hierarchy with Graphite (#27272a) for hairline borders and inactive outlines.
- Use 8px as the default element gap for consistent spacing between interactive components and text blocks.
- Ensure headings always use the Tomorrow font family to provide visual distinction from technical data.

## Don'ts

- Avoid using bright or overly saturated colors other than Cadmium Green (#faff00) to preserve the stark dark theme.
- Do not introduce strong drop shadows; rely on subtle borders and slight background opacity changes for depth.
- Refrain from using mixed fonts for single pieces of information; stick to Geist Mono for data and Tomorrow for headings/primary text.
- Do not deviate from the established border radii (6px, 12px, 9999px); avoid arbitrary rounding.
- Never use White (#ffffff) as a background for entire sections; reserve it for text and critical UI contrast.
- Avoid large, expansive padding within cards; content should feel relatively compact and framed by borders.
- Do not use generic gray tones for borders where Graphite (#27272a) or Ash Gray (#3b3b3b) are specified.

## Layout

The page uses a full-bleed structure for the main content area, with elements extending to the edges of the viewport horizontally. The hero section is dark and centered. Content is organized into distinct, vertically stacked sections, separated by consistent 32px section gaps. Within these sections, a columnar grid system is evident, particularly for feature cards, often 3-4 columns wide. Text and UI elements tend to be left-aligned or centered within their containers, avoiding complex asymmetric compositions. The layout prioritizes an information-dense, yet organized, presentation, complemented by a sticky top navigation bar and a persistent footer.

## Imagery

The site's imagery is primarily composed of diverse NFT art, often presented within structured cards. These visuals range from cartoonish characters to abstract designs, with no consistent color treatment or photographic style. They are always contained within boundaries, either sharp 6px rectangles or slightly rounded 12px cards, and serve as direct content rather than decorative atmosphere. Icons are filled, mono-color, and often use the Cadmium Green accent or White, maintaining a minimalist appearance. There's an absence of lifestyle photography or complex illustrations, emphasizing that the NFTs themselves are the primary visual content.

## Elevation

| Element | Style |
| --- | --- |
| Input | rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |
| Button | rgba(0, 0, 0, 0.05) 0px 1px 2px 0px |

## Similar Brands

| Business | Why |
| --- | --- |
| OpenSea | Dark-themed NFT marketplace with strong focus on cards and data display, similar compact typography. |
| Coinbase Wallet | Utilizes a dark, technical UI with strong accent colors and precise, often monospace, typography for financial data. |
| Etherscan | Data-heavy interface with a dark mode, emphasizing clear data presentation and functional elements over visual flair. |
| Uniswap | DeFi platform with a dark theme, minimalist UI, and a single vibrant accent color to highlight key interactive elements. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
- text: #ffffff
- background: #0a0a0a
- border: #27272a
- accent: #faff00
- primary action: #faff00 (filled action)

Example Component Prompts:
- Create a 'Login' button: Cadmium Green (#faff00) background, True Black (#000000) text, Tomorrow font weight 400, 9999px radius, 12px horizontal padding.
- Design an 'NFT Collection Card': Rich Black (#0a0a0a) background, 12px radius, no box-shadow, with a 1px Graphite (#27272a) border. Header text in Tomorrow font weight 500, White (#ffffff) color. Data points in Geist Mono weight 400, Silver Text (#9d9d9d).
- Construct a 'Search Input': Transparent background, 1px Graphite (#27272a) border at 6px radius. Placeholder text 'Search collections' in Silver Text (#9d9d9d), active text in White (#ffffff). Padding 12px vertical.
- Build a 'Filter Pill': Transparent background, 1px Graphite (#27272a) border, 9999px radius. Text in White (#ffffff) using Tomorrow font weight 400. Padding 4px vertical, 12px horizontal.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510720435-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777510720435-thumb.jpg |
