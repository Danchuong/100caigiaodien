# Symbolic.ai — Refero Style

- Refero URL: https://styles.refero.design/style/694723e9-0df7-4b9f-ba07-83fc598532d6
- Site URL: https://symbolic.ai
- ID: 694723e9-0df7-4b9f-ba07-83fc598532d6
- Theme: light
- Industry: ai
- Created: 2026-04-30T00:18:51.694Z
- Ranks: newest: 839, popular: 1043, trending: 906

> Paper-white canvas, ink-on-page UI.

## Description

Symbolic.ai presents a minimalist canvas, emphasizing content clarity through high contrast typography and subtle, paper-like surface treatments. The primary visual distinction comes from the interplay of a warm off-white background with crisp dark text, occasionally punctuated by a single vibrant red accent. Components echo this ethos with soft, organic shapes and understated shadows, simulating physical objects resting on a textured page. The overall impression is one of calm, focused utility with a hint of analog charm.

## Colors

| Name | Hex | Group | Role |
| --- | --- | --- | --- |
| Canvas Parchment | #fdfcf5 | neutral | Page background — a warm, off-white tone that mimics natural paper |
| Paper White | #ffffff | neutral | Card backgrounds, secondary surfaces, and embedded UI elements, offering a lighter contrast against the main canvas |
| Ink Black | #000000 | neutral | Primary text, headings, icons, and filled button backgrounds, providing strong legibility against light surfaces |
| Charcoal Grey | #4c4c4a | neutral | Subtle text like helper text, link underlines, and secondary borders, creating softer contrast |
| Mid Grey | #7f7e7b | neutral | Muted details, tertiary text, and placeholder states |
| Faded Stone | #d5d0b8 | neutral | Subtle box shadows and outlined card borders, evoking a soft, tactile presence |
| Accent Red | #f42c2b | brand | Distinctive brand accent for specific card backgrounds and decorative highlight elements, drawing attention with urgency |
| Electric Violet | #6938ef | accent | Violet outline accent for tags, dividers, and focused UI edges |
| Subtle Teal | #10756a | accent | Decorative details and occasional background fills for specific UI components, offering a cool contrast to the warm neutrals |

## Typography

| Family | Substitute | Weights | Sizes | Line Height | Role |
| --- | --- | --- | --- | --- | --- |
| sans-serif | system-ui | 400 | 12px | 1.20 | Default system font for basic UI elements and small text where a custom font is not explicitly defined, ensuring broad compatibility. |
| Open Runde | Inter | 400, 700 | 12px, 14px, 16px | 1.50, 1.60, 1.63, 1.71 | Body text and supporting information. Its readability and classic appearance ground the informational aspects of the interface. |
| Open Runde | Inter SemiBold | 600 |  |  | Subheadings and section titles that require a subtle emphasis without overpowering the content. |
| Suisse Works Book | Lora | 450 | 28px, 36px, 58px | 1.31, 1.50 | Primary headings, capturing attention with a distinctive, slightly condensed style. The medium weight provides refinement. |
| Geist Mono | IBM Plex Mono | 400, 600, 700 | 14px | 1.71 | Monospaced text for code blocks, data displays, or distinct informational labels, signaling technical content. |
| Suisse Works Medium | Lora Medium | 500, 700 | 20px | 1.30 | Section headlines, providing a strong but elegant presence, maintaining hierarchy below the main display headings. |
| Grenze Gotisch | Josefin Sans | 400, 700 | 48px | 1.00 | Display text for impactful, large-scale typography, suggesting a crafted, editorial feel. |
| Inter |  | 700 | 14px | 1.71 | Inter — detected in extracted data but not described by AI |

## Type Scale

| Role | Size | Line Height | Letter Spacing |
| --- | --- | --- | --- |
| caption | 12 | 1.63 |  |
| body-sm | 14 | 1.63 |  |
| body | 16 | 1.63 |  |

## Spacing & Shape

```json
{
  "radius": {
    "pill": "2000px",
    "tags": "13px",
    "cards": "24px",
    "icons": "8px",
    "buttons": "16px"
  },
  "elementGap": "10px",
  "sectionGap": "40px",
  "cardPadding": "20px",
  "pageMaxWidth": null
}
```

## Components

### Pill Button, Outlined

**Role:** Ghost buttons for secondary actions or navigation.

Rounded shape at 2000px radius, transparent background, with text color #000000 and 8px padding around content.

### Filled Button, Subtle Corners

**Role:** Primary Call-to-actions, signaling key user interactions.

Filled with #000000, text color #0000ee (browser default link color for buttons detected), with a 16px border-radius and 8px 20px padding.

### Elevated Card

**Role:** Content containers for features, articles, or testimonials.

White background #ffffff, 24px border-radius, with a soft shadow rgba(213, 208, 184, 0.4) 0px 2px 6px 0px, and 20px padding.

### Subtle Border Card

**Role:** Informational panels or meta-content displays with low prominence.

Background rgba(213, 208, 184, 0.1), 8px border-radius, with a faint border shadow rgba(213, 208, 184, 0.3) 0px 0px 0px 1px. No internal padding.

### Accent Red Card

**Role:** Highlight cards for urgent messages or prominent features.

Background in Accent Red #f42c2b, with a highly rounded left edge at 11429px, sharp right edge, and no shadow or padding.

### Image Card

**Role:** Cards designed to feature images or visual content predominantly.

White background #ffffff, organic/irregular border-radius (6.86% / 15.38% from raw data), soft shadow rgba(213, 208, 184, 0.4) 0px 2px 6px 0px, content padded 20px 20px 24px 20px.

## Do's

- Use Canvas Parchment #fdfcf5 as the dominant background color for most page sections, simulating a textured paper feel.
- Apply Ink Black #000000 for all primary text and headings, maintaining high contrast and legibility.
- For interactive elements, default to Pill Button, Outlined, or Filled Button, Subtle Corners, reserving Accent Red #f42c2b for impactful, specific calls to attention.
- Ensure all cards use soft, subtle shadows with Faded Stone #d5d0b8 as the primary shadow color, creating a floating-paper effect.
- Maintain a clear hierarchy in headings using Suisse Works Book for display and main headings, and Open Runde for subheadings and body text.
- Utilize Geist Mono for any code snippets or technical representations to visually segment developer-oriented content.
- Apply 24px border-radius to main content cards and 16px for buttons, contributing to the soft, friendly aesthetic.

## Don'ts

- Avoid using harsh, strong shadows; rely instead on the subtle Faded Stone #d5d0b8 variants.
- Do not introduce new saturated primary colors; limit the use of vivid hues to Accent Red #f42c2b and Electric Violet #6938ef for specific functional highlights.
- Do not use system default blue text for links or buttons unless it's a specific button type that is already using it as its text color (as is the case with some button variants observed); instead, use Ink Black #000000 or Charcoal Grey #4c4c4a.
- Do not use sharp, right-angled corners for interactive elements or primary content containers; maintain the soft, rounded aesthetic.
- Avoid overly dense layouts; leverage the sectionGap of '40px' and cardPadding of '20px' to provide ample whitespace.
- Do not use dark backgrounds for main content sections; the system is designed for a light theme with paper-like surfaces.
- Do not deviate from the specified font families; their unique characteristics are central to the brand's typographic identity.

## Layout

The page primarily uses a full-bleed layout for the overall background, with core content constrained to a max-width container, though the explicit pageMaxWidth cannot be confidently determined from the data. The hero section features a centered headline over the Canvas Parchment background. Section rhythm is dictated by consistent vertical spacing of 40px, with alternating background textures and card treatments rather than stark color blocks. Content arrangement often appears as centered stacks or grid-based displays (implied by card variants), showcasing product UI within overlaid card components. Navigation is a simple top bar with text links and a 'Sign up' button, sticky at the top.

## Imagery

The visual language predominantly features abstract, paper-like product screenshots and UI snippets, often layered and appearing to peel or fold, creating a tactile, analog feel. Icons are typically outlined or simple filled shapes, in monochrome or a single accent color like Electric Violet and Subtle Teal, maintaining a clean, functional aesthetic. Imagery serves primarily to explain product functionality and illustrate processes rather than decorative atmosphere, often showing text content within the simulated paper environment. Density is text-dominant, with visuals supporting and enriching the information.

## Similar Brands

| Business | Why |
| --- | --- |
| Notion | Shares a clean, light canvas aesthetic with minimal borders and subtle shadows, focusing on content density and typographic hierarchy. |
| Substack | Employs a 'paper-like' design with high contrast ink-on-page typography and understated UI elements for a focused reading experience. |
| Linear | Features a strong emphasis on typographic hierarchy, subtle surface changes, and a restrained color palette where accents are functional rather than decorative. |
| Readwise Reader | Uses a warm, off-white background and high-contrast text to create a comfortable reading environment, similar to the textual focus of Symbolic.ai. |

## Custom Sections

### Agent Prompt Guide

Quick Color Reference:
text: #000000
background: #fdfcf5
border: #d5d0b8
accent: #f42c2b
primary action: #000000 (filled action)

Example Component Prompts:
1. Create a Hero Section: background Canvas Parchment #fdfcf5. Headline 'AI Superpowers for Publishers.' using Suisse Works Book weight 450, 58px, #000000. Subtext 'The first AI platform created for professional journalists.' using Open Runde weight 400, 16px, #000000. Below, a Filled Button, Subtle Corners labeled 'Request a demo →'.
2. Create an Elevated Feature Card: background Paper White #ffffff, 24px border-radius, shadow rgba(213, 208, 184, 0.4) 0px 2px 6px 0px, 20px padding. Inside, 'Business News' as Suisse Works Medium weight 500, 20px, #000000, and body text as Open Runde weight 400, 14px, #000000.
3. Create a Progress Indicator: A small element showing 'Generating...' using Open Runde weight 400, 14px, Electric Violet #6938ef. Place it on a Subtle Border Card with background rgba(213, 208, 184, 0.1), 8px border-radius, and border shadow rgba(213, 208, 184, 0.3) 0px 0px 0px 1px.
4. Create a Navigation Bar: Canvas Parchment #fdfcf5 background. Left aligned logo (replace with placeholder). Right-aligned text links 'Team', 'News', 'Security', 'Pricing', 'Log in' using Open Runde weight 400, 14px, #000000. End with a Filled Button, Subtle Corners for 'Sign up'.
5. Create an Accent Highlight Card: Accent Red #f42c2b background, 11429px 0px 0px 11429px border-radius. No padding or shadow.

## Assets

| Type | URL |
| --- | --- |
| screenshot | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508279174-screenshot.jpg |
| thumbnail | https://ysxnuuuj3kqhdyj2.public.blob.vercel-storage.com/1777508279174-thumb.jpg |
