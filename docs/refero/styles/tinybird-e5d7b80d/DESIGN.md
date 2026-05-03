# Tinybird — Refero Style

- Refero URL: https://styles.refero.design/style/e5d7b80d-f473-439f-87a5-84716c448a05
- Site URL: https://tinybird.co
- ID: e5d7b80d-f473-439f-87a5-84716c448a05
- Theme: dark
- Industry: devtools
- Created: 2026-02-16T17:04:57.000Z
- Ranks: newest: 1175, popular: 399, trending: 1055

> Data noir interface — high contrast text and a single, electric green highlight on a deep, almost black background.

## Description

Tinybird presents a 'data noir' aesthetic, marrying industrial-strength data tools with a sophisticated, restrained dark theme. The interplay of near-black backgrounds and pristine white text creates a high-contrast experience, punctuated by a single, vibrant green accent. Careful use of grayscale and subtle elevation on cards provides depth, ensuring critical information stands out against the dark canvas without feeling overwhelming.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Midnight Ink | #0a0a0a | neutral | Page backgrounds, elevated surface backgrounds |
| Obsidian Slate | #262626 | neutral | Card backgrounds, section dividers |
| Iron Oxide | #151515 | neutral | Subtly darker surface backgrounds, minor elements |
| Deep Graphite | #353535 | neutral | Hover states, subtle borders |
| Silver Mist | #8d8d8d | neutral | Secondary text, inactive elements, input placeholders |
| Pure White | #ffffff | neutral | Primary text, main headings, critical information |
| Electric Green | #27f795 | brand | Primary call-to-action buttons, active navigation, key interactive elements – signals interaction and success in an almost neon glow against the dark UI |
| Deep Jade | #008060 | semantic | Subtle indicators, success states (less prominent than Electric Green) |
| Alert Red | #800000 | semantic | Error states, warnings |
| Crimson Hue | #ec6d62 | semantic | Semantic highlight, less harsh than Alert Red |
| Goldenrod | #f5c451 | semantic | Informational highlight, warning states |
| Leaf Green | #61c454 | semantic | Alternative success indicator, muted compared to Electric Green |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Roboto | system-ui, sans-serif | 400, 600, 700 | 12px, 14px, 16px, 18px, 24px, 64px | 1.13, 1.33, 1.50, 1.57, 1.67, 1.78 | The primary sans-serif for all UI elements and body text. Weight 400 is the default for readability, while 600 and 700 are used for emphasis in headings and navigation. The tight letter-spacing at larger sizes ('-0.0200em') creates a more refined, precise look for headlines, typical of digital-native brands. |
| Roboto Mono | monospace | 400 | 12px, 14px, 16px, 56px | 1.00, 1.50, 1.57, 1.67 | Used for code snippets, data points, and technical labels. Its monospace nature clearly differentiates technical content, while the very tight letter-spacing ('-0.0840em') makes even large numbers feel precise and compact, aligning with the brand's focus on efficiency and data infrastructure. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.78 |  |
| body | 14 | 1.57 |  |
| body-lg | 16 | 1.57 |  |
| subheading | 18 | 1.67 |  |
| heading | 24 | 1.33 |  |
| display-sm | 56 | 1 | -0.084 |
| display-lg | 64 | 1.13 | -0.02 |

## Spacing & Shape

```json
{
  "radius": {
    "cards": "8px",
    "buttons": "0px",
    "default": "4px"
  },
  "elementGap": "8px",
  "sectionGap": "",
  "cardPadding": "0px",
  "pageMaxWidth": null
}
```

## Components

### CTA Button Group



### Use Case Tag Selector



### Testimonial Card Grid



### Primary CTA Button

**Role:** Call to action

Solid Electric Green (#27f795) background with Pure White (#ffffff) text. Padding: 8px vertical, 24px horizontal. Sharp corners (0px border-radius) for a direct, functional feel.

### Ghost Navigation Link

**Role:** Navigation

Transparent background with Pure White (#ffffff) text. No padding, no border-radius. Minimalist, almost invisible until hovered.

### Badge Button

**Role:** Categorization/Tagging

Transparent background with Silver Mist (#8d8d8d) text. 4px border-radius, 2px vertical and 4px horizontal padding. Subtle visual weight suitable for filtering or tagging.

### Disabled/Secondary Ghost Link

**Role:** Navigation/Low-priority action

Transparent background with Silver Mist (#8d8d8d) text. No padding, no border-radius. Indicates a less emphasized action or inactive state.

### Sign Up Button

**Role:** Navigation/Action

Solid Electric Green (#27f795) background with Midnight Ink (#0a0a0a) text. Sharp corners (0px border-radius). Padding: 8px vertical, 24px horizontal. Top right navigation prominent action.

### Sign In Button

**Role:** Navigation/Action

Transparent background with Pure White (#ffffff) text. No border, no padding. Low visual weight navigation action.

### Client Logo Grid Item

**Role:** Brand endorsement display

Images contained within a `div` on the Midnight Ink (#0a0a0a) background. Minimal padding and no border-radius, presenting logos directly without adornment, emphasizing the dark canvas.

## Do's

- Use Midnight Ink (#0a0a0a) for all primary page backgrounds to maintain the brand's 'data noir' aesthetic.
- Apply Electric Green (#27f795) exclusively for primary calls-to-action and active states to ensure high impact and clear signaling.
- Utilize Roboto at weight 400 for all body copy and default text at 14px with lineHeight 1.57 for maximum readability.
- Reserve Roboto Mono for all data points, code blocks, and technical figures, specifically at 56px with -0.0840em letter-spacing for large numbers.
- Implement 0px border-radius for all primary buttons to convey a direct, precise interaction model.
- Maintain a clear hierarchy with Pure White (#ffffff) for primary text and Silver Mist (#8d8d8d) for secondary or supporting text.
- Employ Obsidian Slate (#262626) with an 8px border-radius for card backgrounds to visually separate content blocks from the main background.

## Don'ts

- Do not introduce additional saturated colors; Electric Green (#27f795) is the singular brand accent.
- Avoid decorative shadows or excessive elevation; depth is created through varying shades of gray and card backgrounds.
- Do not use letter-spacing on body text; apply tight letter-spacing (-0.0200em or -0.0840em) only to display headings and technical text fields.
- Never use rounded buttons or pill shapes; all interactive elements should maintain sharp corners unless specifically designated for cards (8px).
- Avoid light backgrounds; the design system is strictly dark-mode first.
- Do not use generic system fonts for data or code; Roboto Mono is mandated for technical content to ensure distinction.
- Refrain from using gratuitous iconography; only use icons when they serve a clear functional purpose, maintaining the minimal aesthetic.

## Layout

The layout is primarily centered and contained, with a max-width approach implied by content blocks, although the main background is full-bleed Midnight Ink. The hero section is full-bleed dark with a prominent, centered headline and subtext, followed by centered CTA buttons. Sections alternate between dense information blocks, often with client logos in a grid, and testimonial cards that adopt a card grid structure. Vertical spacing between sections is generous and irregular, ranging from 136px to 456px, creating a comfortable rhythm. Navigation is a sticky top bar with left-aligned brand icon and right-aligned text links and CTA buttons.

## Imagery

The site's visual language is text-dominant, with imagery appearing primarily as product-focused illustrations or iconographic elements. Where present, visuals are stark and clean: client logos are monochrome, either Pure White or Silver Mist against the dark background. Abstract graphics are geometric and align with a data visualization aesthetic. There are no photographs. The overall impression is one of pure UI, where information and code are the primary visual content, accented by minimalist, functional graphics that support the technical narrative.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Dark-mode UI, prominent green accent color for CTAs, and a focus on developer tools and infrastructure. |
| Stripe (developer docs) | High-contrast dark theme, monospace fonts for code, and a clean, function-over-form aesthetic for developer audience. |
| Supabase | Dark UI, single vibrant accent color, and a modern, slightly industrial feel for database and backend tools. |

## Custom Sections

### Agent Prompt Guide

### Quick Color Reference
- Text: #ffffff (Pure White)
- Background: #0a0a0a (Midnight Ink)
- CTA: #27f795 (Electric Green)
- Secondary Text: #8d8d8d (Silver Mist)
- Card Background: #262626 (Obsidian Slate)

### 3-5 Example Component Prompts
1. Create a hero section: background #0a0a0a. Headline with 'Ship fast over a Managed ClickHouse®' at 64px Roboto weight 600, #ffffff, letter-spacing -0.020em. Subtext 'The data infrastructure...' at 18px Roboto weight 400, #8d8d8d. Primary CTA button with text 'Try for free', background #27f795, text #0a0a0a, 8px vertical padding, 24px horizontal padding, 0px border-radius. Secondary CTA with text 'Contact sales', background transparent, text #ffffff.
2. Design a testimonial card: background #262626, 8px border-radius. Inner text 'We stopped investing in our ClickHouse cluster...' at 16px Roboto weight 400, #ffffff. Author name 'Jared Palmer' at 14px Roboto weight 600, #ffffff. Position 'VP of AI at Vercel' at 14px Roboto weight 400, #8d8d8d.
3. Implement a navigation bar item: Text 'Product [+]', color #ffffff, font Roboto weight 400, no padding, 0px border-radius. On hover, color #27f795. The '+' should be Roboto Mono weight 400, 14px.
4. Render a data metric display: Number '1.47B' using Roboto Mono 56px weight 400, #ffffff, letter-spacing -0.084em. Label 'REQUESTS PER MONTH' using Roboto 12px weight 400, #8d8d8d.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923333473-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775923333473-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5d7b80d-f473-439f-87a5-84716c448a05-1777561525767-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5d7b80d-f473-439f-87a5-84716c448a05-1777561525767-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5d7b80d-f473-439f-87a5-84716c448a05-1777561525767-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/e5d7b80d-f473-439f-87a5-84716c448a05-1777561525767-preview-detail-poster.jpg |
