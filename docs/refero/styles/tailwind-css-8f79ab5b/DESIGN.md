# Tailwind CSS — Refero Style

- Refero URL: https://styles.refero.design/style/8f79ab5b-a91a-4bf4-a64f-4a5ba3ada7d5
- Site URL: https://tailwindcss.com
- ID: 8f79ab5b-a91a-4bf4-a64f-4a5ba3ada7d5
- Theme: light
- Industry: devtools
- Created: 2026-02-28T09:32:14.000Z
- Ranks: newest: 1112, popular: 190, trending: 797

> Type specimen as product demo — a typographer's proof sheet where the headline IS the interface, bold black at 96px demanding attention through size alone.

## Description

Tailwind CSS's homepage feels like a live code editor bleeding into a marketing page — black type hammered at near-display scale, monospace code fragments interrupting prose, and a white canvas that never apologizes for its blankness. The near-black #030712 dominates everything: headings, body copy, borders, and buttons all collapse toward the same ink-black anchor, creating a stark tonal discipline rarely seen on developer tools sites that usually reach for blue. The signature move is scale contrast: 96px Inter at weight 700 next to 14px monospace code, the size gulf doing all the visual work that color usually handles. Accent colors (sky blue #00a6f4, hot pink #e60076) appear exclusively inside inline code snippets as syntax highlights, never as UI chrome — they're content, not decoration. The color palette swatch section generates a systematic rainbow of every Tailwind hue, but the actual UI uses only ink-black, white, and near-grays.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Ink Black | #030712 | neutral | Primary text, borders, button backgrounds, and icon fills — the near-black with a trace of blue that reads as absolute black in context |
| Slate Mist | #4a5565 | neutral | Secondary body text and icon fills |
| Slate Mid | #6a7282 | neutral | Tertiary text, muted labels |
| Slate Cool | #364153 | neutral | Subdued body copy and link text |
| Steel Veil | #90a1b9 | neutral | Placeholder text, de-emphasized borders |
| Fog Line | #cad5e2 | neutral | Subtle dividers and input outlines |
| Slate Deep | #1e2939 | neutral | Dark surface borders, code window chrome |
| Pure White | #ffffff | neutral | Page background, button text on black, card surfaces |
| Off White | #bfbfbf | neutral | Inset ring shadows on image and card surfaces |
| Syntax Sky | #00a6f4 | brand | Syntax highlight for class names in code demos — sky blue signals utility class tokens specifically |
| Syntax Cyan | #74d4ff | brand | Secondary code token highlight, icon fills in dark code windows |
| Syntax Rose | #e60076 | accent | Syntax highlight for property values and inline class references in body copy — vivid red-pink against white makes code fragments immediately scannable |
| Neon Pink | #f6339a | accent | Secondary accent in inline code badges and color swatch demos |
| Electric Violet | #e12afb | accent | Tertiary syntax accent in code blocks |
| Mint Glow | #96f7e4 | accent | Teal syntax highlight in dark code editor sections |
| Ocean Depth | #00598a | accent | Inline link color in body text |
| Blush Silk | #fb64b6 | accent | Color palette demo swatches — pink row |
| Powder Blue | #bedbff | accent | Muted blue syntax tokens in dark code blocks |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| Inter | Inter (Google Fonts — this is already Inter) | 400, 500, 600, 700 | 12px, 13px, 14px, 16px, 18px, 20px, 24px, 30px, 36px, 40px, 96px | 1.00–2.00 (tightest at large display sizes, 1.5–1.75 at body sizes) | Every UI element — from 96px hero headline to 12px nav labels. Weight 700 at 96px is the defining visual statement; the same family at 400/14px handles footnotes, creating a 8:1 weight-to-size hierarchy within a single typeface. The letterSpacing at -0.05em tightens display sizes, pulling characters together at scale. |
| IBM Plex Mono (plexMono) | IBM Plex Mono (Google Fonts) | 400, 500, 600 | 12px, 13px, 14px, 17px | 1.33–2.15 (loose line height for code readability) | All code blocks, inline code badges, and the live editor demo sections. The +0.1em letter-spacing is deliberate — monospace with tracking creates visual distance from prose, immediately signaling 'this is code'. Used exclusively at small sizes (12–17px), never for headings. |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.5 |  |
| body | 14 | 1.71 |  |
| heading-sm | 20 | 1.4 |  |
| heading | 30 | 1.33 | -1.5 |
| heading-lg | 40 | 1.2 | -2 |
| display | 96 | 1 | -4.8 |

## Spacing & Shape

```json
{
  "radius": {
    "tags": "16px",
    "cards": "8px",
    "modals": "12px",
    "buttons": "32px (pill CTA), 4px (code/tag badges)",
    "codeBlocks": "8px"
  },
  "elementGap": "16px",
  "sectionGap": "96px",
  "cardPadding": "24px",
  "pageMaxWidth": "1280px"
}
```

## Components

### CTA Button Group with Search Bar



### Sponsors Section



### Version Pill Badge + Inline Code Tags



### Primary CTA Button

**Role:** Main calls to action — 'Get started', 'Become a sponsor'

Black (#000000) background, white text, 32px border radius (pill shape), 8px top/bottom padding, 16px left/right padding. Inter 400 at 14px. No border visible — the fill is the form. High contrast 21:1 against white backgrounds. The pill shape is the only rounded UI element at this scale.

### Dark Code Badge Button

**Role:** Version label and secondary tags inside dark sections

Nearly transparent dark background (oklab ~5% black), white text, 4px border radius, 4px vertical padding, 8px horizontal padding. 1px inset white shadow at 5% opacity creates a subtle border without a hard color. Inter 400 at 13px.

### Ghost Dark Button

**Role:** Secondary actions within dark code editor UI

Transparent background, white text, 4px radius, 4px/8px padding. 1px inset white border at full opacity. Identical shape to Dark Code Badge but with fully opaque border, making it read as outlined rather than ghosted.

### Version Pill Badge

**Role:** Current version tag in navigation (v4.2)

~5% black background on light page, near-black text (#030712), 16px border radius, 2px top/bottom padding, 10px left padding, 6px right padding. Inset 1px ring shadow in near-black at 5% opacity. Inter at 13px weight 500.

### Inline Code Tag

**Role:** Class name references in body text (flex, pt-4, text-center)

Colored text (Syntax Sky #00a6f4, Syntax Rose #e60076, or Mint Glow #96f7e4 depending on token type) on white background. No background fill on the tag itself — color alone signals code. IBM Plex Mono at 14px with +0.1em letter-spacing and 'ss02'/'zero' features.

### Search Input Bar

**Role:** Quick search command palette trigger in header

Transparent background, 0px border radius, no visible padding. Black text (#000000) with keyboard shortcut hint (⌘K) in Slate Mid (#6a7282). No box shadow or border in rest state — completely borderless, distinguished only by a search icon and the shortcut badge.

### Sponsor Logo Card

**Role:** Partner and sponsor logos in the 'Supported by the best' section

White background, no border or shadow. Black monochrome logo treatment — all sponsor logos rendered in solid black (or close to it) against white. Logos displayed at ~40–60px height in a 4-column responsive grid with 24px column gap. No hover state visible.

### Navigation Bar

**Role:** Top sticky header with brand, links, and utilities

White background, full width. Tailwind CSS logomark left-aligned. Nav links (Docs, Blog, Showcase, Sponsor) in Inter 400 14px, Ink Black (#030712). 'Plus' link rendered as a bright blue pill badge. GitHub icon and search icon at right. 8px gap between items. No bottom border or shadow — floats above content.

### Section Label

**Role:** Eyebrow text above section headings ('SPONSORS')

All-caps, Inter 600 at 12px, tracking wider. Syntax Sky (#00a6f4) or brand accent color. Placed 8px above the section heading. Signals section identity without competing with the heading weight.

### Card with Inset Ring Shadow

**Role:** Image cards and UI preview cards throughout the page

White or near-white background, 8px border radius, inset shadow: `oklab(0.129999 -0.00404751 -0.027702 / 0.1) 0px 0px 0px 1px inset` — a 1px near-black ring at 10% opacity. This replaces a border entirely; the shadow approach means no box-model interference with layout. No outer drop shadow.

### Card with Elevation Shadow

**Role:** Elevated cards that need more depth (overlaid preview cards)

White background, 8px radius. Compound shadow: `oklab(white/0.2) 0px 0px 0px 1px inset, oklab(black/0.1) 0px 0px 0px 1px, rgba(0,0,0,0.1) 0px 1px 3px 0px, rgba(0,0,0,0.1) 0px 1px 2px -1px`. Inner white ring + outer dark ring + 1-3px drop shadow. Depth without dramatic lifting.

## Do's

- Use Inter with font-feature-settings: '"cv02", "cv03", "cv04", "cv11"' at all sizes — these alternates are non-negotiable for Tailwind's typographic identity.
- Apply -0.05em letter-spacing globally on Inter text; at 96px this compresses to ~-4.8px, giving display text the tightly-set newspaper feel visible in the hero.
- Use the inset 1px ring shadow (`oklab(0.129999 -0.00404751 -0.027702 / 0.1) 0px 0px 0px 1px inset`) instead of CSS borders on cards — this prevents layout shift and matches the exact surface treatment used throughout.
- Reserve 32px pill-radius buttons exclusively for primary CTAs; use 4px radius for all secondary tags, version badges, and code labels.
- Render inline code references with IBM Plex Mono at +0.1em letter-spacing and features '"ss02", "zero"' — the wide tracking visually separates code tokens from surrounding prose at a glance.
- Use syntax colors (#00a6f4, #e60076, #96f7e4) ONLY inside code blocks and inline code references — never as UI chrome, button colors, or decorative fills.
- Place section eyebrow labels in all-caps Inter 600 at 12px in Syntax Sky (#00a6f4) — this is the only recurring non-black UI element on the marketing page.

## Don'ts

- Don't use any background color other than #ffffff or #030712-family darks for page sections — the entire marketing site alternates between pure white and near-black; any mid-gray background breaks the tonal discipline.
- Don't use rounded corners larger than 8px on cards or content containers — only pill buttons (32px) and version badges (16px) use high-radius; cards stay at 8px.
- Don't apply accent colors (sky blue, hot pink, mint) to navigation items, headings, or UI buttons — they belong exclusively in code syntax contexts.
- Don't use IBM Plex Mono for anything except code blocks and inline code badges — no headings, nav items, or body copy should appear in monospace.
- Don't add drop shadows to sponsor logos or section-level card grids — the inset ring shadow is the only depth signal; external shadows are reserved for elevated overlay cards only.
- Don't set heading weights below 700 at display sizes — the hero's authority comes entirely from weight-plus-scale, not color or decoration.
- Don't introduce gradients into UI chrome — the extensive gradient color data represents the Tailwind color palette documentation swatch system, not page decoration.

## Layout

Max-width contained (~1280px) centered on white. Hero is asymmetric: headline text at full-width left-aligned (not centered), with two demo cards floating to the right and overlapping partially offscreen — creating a deliberate bleed that suggests the framework is bigger than the viewport. The hero headline occupies 60% of viewport width at display size. Section rhythm is consistent white bands with 96px vertical gaps — no alternating dark/light banding in the marketing sections (the dark is reserved for the embedded code editor block, not full-width section backgrounds). Sponsor logos in a 4-column grid with generous whitespace between items. Navigation is a flat top bar, not sticky based on screenshot evidence, with logo left, links right, and utility icons far-right. Content arrangement below the fold switches to centered headings with left-aligned supporting text — a subtle asymmetry that prevents monotony. Zero sidebar usage on the marketing page.

## Imagery

Product UI screenshots and live code editor demos dominate — no lifestyle photography anywhere. The hero section shows an actual HTML file in a dark code editor window with real Tailwind classes highlighted in syntax colors, making the product the hero literally. A secondary card shows a real-world UI output (a product card with photography), demonstrating the output of writing those classes. Photography within demo cards is tight editorial product shots (album covers, property images), displayed in rounded-corner containers (8px) with inset ring shadows — the photography is always framed, never full-bleed. Icon style is filled/solid, monochromatic black, at 16–20px. The color palette section uses flat solid color swatches in a systematic grid — no gradients or imagery, pure chromatic data visualization. Overall image density is low — wide text-dominant whitespace with one large code demo occupying roughly 40% of the first viewport's lower half.

## Similar Brands

| Business | Why |
| --- | --- |
| Vercel | Same ink-black (#000) dominant palette with pure white backgrounds, pill-shaped primary buttons, and Inter as the sole UI typeface — both treat type scale as the primary design tool |
| Linear | Monochromatic near-black text system with a single vivid accent that appears in specific contexts only, never as general UI chrome |
| Radix UI | Developer tool marketing using live code demos as hero content, dark code blocks floating over white, and monospace syntax highlighting as the primary visual decoration |
| Shadcn/ui | Same Inter + monospace code pairing, inset ring shadows instead of borders, and black/white tonal discipline with zero mid-gray backgrounds |

## Custom Sections

### Agent Prompt Guide

**Quick Color Reference**
- Primary text: #030712 (Ink Black)
- Page background: #ffffff (Pure White)
- CTA button: #000000 background, #ffffff text
- Code syntax — class names: #00a6f4 (Syntax Sky)
- Code syntax — property values: #e60076 (Syntax Rose)
- Inline links: #00598a (Ocean Depth)
- Muted text: #6a7282 (Slate Mid)
- Card border (inset ring): oklab(0.129999 -0.00404751 -0.027702 / 0.1)

**Example Component Prompts**

1. **Hero Section**: White (#ffffff) full-width background. Headline at 96px Inter weight 700, color #030712, letter-spacing -4.8px, line-height 1.0, text-balance. Subtext at 18px Inter weight 400, color #4a5565, line-height 1.6. Body inline code tokens in IBM Plex Mono 14px, color #00a6f4 or #e60076 per token type. Primary CTA button: #000000 background, #ffffff text, 32px border-radius, 8px/16px padding, Inter 400 14px. Search field adjacent: transparent background, 0px radius, black text with ⌘K badge in Slate Mid.

2. **Dark Code Editor Block**: Background #030712, border-radius 8px, inset shadow `oklab(0.129999 -0.00404751 -0.027702 / 0.1) 0px 0px 0px 1px inset`. Three traffic-light circles top-left (decorative). Code in IBM Plex Mono 13px, letter-spacing +1.3px, features 'ss02' 'zero'. Line numbers: #90a1b9. HTML tags: #ffffff. Class name string values: #00a6f4. Other string values: #74d4ff. Teal tokens: #96f7e4.

3. **Sponsor Logo Grid**: White background section. Eyebrow label 'SPONSORS' in Inter 600 12px, #00a6f4, all-caps, letter-spacing 0.08em. Section heading 'Supported by the best.' in Inter 700 40px, #030712, letter-spacing -2px. Logos in 4-column CSS grid, 24px column-gap, 48px row-gap. Each logo: black monochrome, max-height 40px, no border/shadow on the logo itself.

4. **Version Badge (nav)**: Background oklab(~5% black), color #030712, border-radius 16px, padding 2px 6px 2px 10px. Box-shadow: `oklab(0.129999 -0.00404751 -0.027702 / 0.05) 0px 0px 0px 1px`. Inter 500 13px. Text: 'v4.2'.

5. **Card with Inset Ring**: White background, border-radius 8px, NO CSS border, box-shadow: `oklab(0.129999 -0.00404751 -0.027702 / 0.1) 0px 0px 0px 1px inset`. Padding 24px. For elevated variant add outer shadow: `rgba(0,0,0,0.1) 0px 1px 3px 0px, rgba(0,0,0,0.1) 0px 1px 2px -1px` plus the inset ring.

### Color Palette Demo System

The extensive rainbow of color values in the token data (100+ colors from #460809 to #f6cfff) are NOT page UI colors — they are the Tailwind CSS color palette documentation swatches rendered on the page as a systematic grid demonstrating every color in the Tailwind v4 palette. These colors appear only as `backgroundColor` in swatch elements. Never use these in new page designs built with this system. The actual UI palette is strictly: Ink Black (#030712), Pure White (#ffffff), 5 near-gray neutral tones, and 2-3 syntax accent colors.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775930481611-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1775930481611-thumb.jpg |
| preview video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8f79ab5b-a91a-4bf4-a64f-4a5ba3ada7d5-1777567108394-preview.mp4 |
| preview video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8f79ab5b-a91a-4bf4-a64f-4a5ba3ada7d5-1777567108394-preview-poster.jpg |
| detail video | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8f79ab5b-a91a-4bf4-a64f-4a5ba3ada7d5-1777567108394-preview-detail.mp4 |
| detail video poster | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/8f79ab5b-a91a-4bf4-a64f-4a5ba3ada7d5-1777567108394-preview-detail-poster.jpg |
